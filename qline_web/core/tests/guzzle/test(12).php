<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class ApiController extends Controller
{
    public function getAllStudents() {
      $students = Student::get()->toJson(JSON_PRETTY_PRINT);
      return response($students, 200);
    }

    public function createStudent(Request $request) {
      $student = new Student;
      $student->name = $request->name;
      $student->course = $request->course;
      $student->save();

      return response()->json([
        "message" => "student record created"
      ], 201);
    }

    public function getStudent($id) {
      if (Student::where('id', $id)->exists()) {
        $student = Student::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
        return response($student, 200);
      } else {
        return response()->json([
          "message" => "Student not found"
        ], 404);
      }
    }

    public function updateStudent(Request $request, $id) {
      if (Student::where('id', $id)->exists()) {
        $student = Student::find($id);

        $student->name = is_null($request->name) ? $student->name : $request->name;
        $student->course = is_null($request->course) ? $student->course : $request->course;
        $student->save();

        return response()->json([
          "message" => "records updated successfully"
        ], 200);
      } else {
        return response()->json([
          "message" => "Student not found"
        ], 404);
      }
    }

    public function deleteStudent ($id) {
      if(Student::where('id', $id)->exists()) {
        $student = Student::find($id);
        $student->delete();

        return response()->json([
          "message" => "records deleted"
        ], 202);
      } else {
        return response()->json([
          "message" => "Student not found"
        ], 404);
      }
    }
}

?>

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

<?php

Route::get('/songs/{song}', function(Song $song) {
    return (new SongResource(Song::find(1)))->additional([
        'meta' => [
            'anything' => 'Some Value'
        ]
    ]);
})

?>

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

<?php

      public function index(Request $request)
    {
        return Company::all()->map(function ($company) use ($request) {
            if (! $request->user->is_admin) {
                unset($company['phone_number']);
            }
        });
    }

?>

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

<?php
 
namespace App\Http\Resources;
 
use Illuminate\Http\Resources\Json\JsonResource;
 
class Post extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'body' => $this->body
        ];
    }
    
    public function with($request)
    {
        return [
            'version' => '1.0.0',
            'api_url' => url('http://lpgvue/api')
        ];
    }
}

?>