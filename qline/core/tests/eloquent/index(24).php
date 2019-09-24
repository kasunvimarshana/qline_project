<!-- ------------------------------------------------------------------------------------------------- -->
<?php

    use DB;
    try{
        // Start transaction!
        DB::beginTransaction();
        /*
            code
        */
        // If we reach here, then
        // data is valid and working.
        // Commit the queries!
        DB::commit();
    }catch(Exception $e){
        DB::rollback(); 
    }

?>
<!-- ------------------------------------------------------------------------------------------------- -->