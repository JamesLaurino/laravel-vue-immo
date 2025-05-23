<?php

namespace App\Http\Controllers\Image;

use App\Http\Controllers\Controller;
use App\Models\Image;

class ImageController extends Controller
{
    public function destroy($id) {
        $image = Image::FindOrFail($id);
        $image->update([
            'house_id' => null,
        ]);

        return redirect()->route('house.index');
    }
}
