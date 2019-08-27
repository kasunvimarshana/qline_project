<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class CompanyResource extends Resource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'phone_number' => $this->when($request->user->is_admin, $this->phone_number),
        ];
    }
}

?>

<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller as BaseController;
use App\Company;
use App\Http\Resources\CompanyResource;

class CompanyController extends BaseController
{
    public function index()
    {
        return CompanyResource::collection(
            Company::all()
        );
    }
}

?>