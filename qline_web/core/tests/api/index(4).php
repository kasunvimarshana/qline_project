<?php
////////////////////////////////////////////////////////////////////////////////////////////////////
if ($request->has('name')) {
    //
}
////////////////////////////////////////////////////////////////////////////////////////////////////
if ($request->has(['name', 'email'])) {
    //
}
////////////////////////////////////////////////////////////////////////////////////////////////////
if ($request->filled('name')) {
    //
}
////////////////////////////////////////////////////////////////////////////////////////////////////
return redirect('form')->withInput();

return redirect('form')->withInput(
    $request->except('password')
);
////////////////////////////////////////////////////////////////////////////////////////////////////
$username = $request->old('username');
////////////////////////////////////////////////////////////////////////////////////////////////////
if ($request->hasFile('photo')) {
    //
}
////////////////////////////////////////////////////////////////////////////////////////////////////
if ($request->file('photo')->isValid()) {
    //
}
////////////////////////////////////////////////////////////////////////////////////////////////////
$path = $request->photo->path();
$extension = $request->photo->extension();
$path = $request->photo->store('images');
$path = $request->photo->store('images', 's3');
$path = $request->photo->storeAs('images', 'filename.jpg');
$path = $request->photo->storeAs('images', 'filename.jpg', 's3');
////////////////////////////////////////////////////////////////////////////////////////////////////
?>