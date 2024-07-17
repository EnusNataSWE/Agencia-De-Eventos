<?php

namespace App\Policies;

use App\Models\Event;
use App\Models\User;

class EventPolicy
{

    public function isOwner(User $user, Event $event): bool
    {
        return $user->id === $event->user_id;
    }

    public function participate(User $user, Event $event): bool
    {
        return $event->user_id !== $user->id &&
            $event->participants()->where('user_id', $user->id)->doesntExist();
    }
    public function leave(User $user, Event $event): bool
    {
        return $event->user_id !== $user->id &&
            $event->participants()->where('user_id', $user->id)->exists();
    }
}
