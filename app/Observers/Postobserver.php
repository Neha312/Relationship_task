<?php

namespace App\Observers;

use App\Models\Postbserver;
use Illuminate\Support\Str;
use App\Models\Comment;

class Postobserver
{
    /**
     * Handle the Postbserver "created" event.
     *
     * @param  \App\Models\Postbserver  $postbserver
     * @return void
     */
    public function created(Postbserver $postbserver)
    {
        // $postbserver->slug = Str::slug($postbserver->title);
        // $postbserver->save();
        $postbserver->slug = Str::slug($postbserver->title);
        $postbserver->save();
    }

    /**
     * Handle the Postbserver "updated" event.
     *
     * @param  \App\Models\Postbserver  $postbserver
     * @return void
     */
    public function updated(Postbserver $postbserver)
    {
        //
    }

    // public function deleting(Postbserver $postbserver)
    // {
    //     $postbserver->comments()->delete();
    // }

    /**
     * Handle the Postbserver "deleted" event.
     *
     * @param  \App\Models\Postbserver  $postbserver
     * @return void
     */
    public function deleted(Postbserver $postbserver)
    {
        $postbserver->comments()->delete();
    }


    /**
     * Handle the Postbserver "restored" event.
     *
     * @param  \App\Models\Postbserver  $postbserver
     * @return void
     */
    public function restored(Postbserver $postbserver)
    {
        //
    }

    /**
     * Handle the Postbserver "force deleted" event.
     *
     * @param  \App\Models\Postbserver  $postbserver
     * @return void
     */
    public function forceDeleted(Postbserver $postbserver)
    {
        //
    }
}
