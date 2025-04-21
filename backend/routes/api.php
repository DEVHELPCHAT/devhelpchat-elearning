<?php
use Illuminate\Http\Request;

// TODO: Add authentication and course endpoints
Route::get('/status', function () {
    return response()->json(['status' => 'DevHelpChat API is running!']);
    });