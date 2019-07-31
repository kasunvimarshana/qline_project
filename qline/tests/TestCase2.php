<?php

public function update(Request $request, Project $project)
{
    $project->update([
        'title' => $request->title,
    ]);
    // API Resource with `202 Accepted` Response
    return (new ProjectResource($project))
        ->response()
        ->setStatusCode(202);
}

?>