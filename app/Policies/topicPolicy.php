<?php

namespace App\Policies;

use App\User;
use App\topic;
use Illuminate\Auth\Access\HandlesAuthorization;

class topicPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any topics.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
        return ($user->role===1);

    }

    /**
     * Determine whether the user can view the topic.
     *
     * @param  \App\User  $user
     * @param  \App\topic  $topic
     * @return mixed
     */
    public function view(User $user, topic $topic)
    {
        //

    }

    /**
     * Determine whether the user can create topics.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
        return true;
    }

    /**
     * Determine whether the user can update the topic.
     *
     * @param  \App\User  $user
     * @param  \App\topic  $topic
     * @return mixed
     */
    public function update(User $user, topic $topic)
    {
        //
        return ($user->id===$topic->creator);
    }

    /**
     * Determine whether the user can delete the topic.
     *
     * @param  \App\User  $user
     * @param  \App\topic  $topic
     * @return mixed
     */
    public function delete(User $user, topic $topic)
    {
        //
        return ($user->role===1);
    }
    public function censor(User $user, topic $topic)
    {
        //
        return ($user->role===1);
    }

    /**
     * Determine whether the user can restore the topic.
     *
     * @param  \App\User  $user
     * @param  \App\topic  $topic
     * @return mixed
     */
    public function restore(User $user, topic $topic)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the topic.
     *
     * @param  \App\User  $user
     * @param  \App\topic  $topic
     * @return mixed
     */
    public function forceDelete(User $user, topic $topic)
    {
        //
    }
}
