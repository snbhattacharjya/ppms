<?php

namespace Database\Seeders;

use App\Models\BlockMuni;
use App\Models\District;
use App\Models\Office;
use App\Models\State;
use App\Models\Subdivision;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\UserResource;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //State Admin User
        $user = User::factory()->create([
            'code'     => 'ceo.admin',
            'email'    => 'ceo.admin-ppms@gov.in',
            'is_admin' => 1,
        ]);
        $resource = State::first();
        UserResource::factory()->create([
            'user_id' => $user->id,
            'resource_id' => $resource->id,
            'resource_type' => get_class($resource),
        ]);        

        //State User
        $user = User::factory()->create([
            'code'     => 'ceo',
            'email'    => 'ceo-ppms@gov.in',
        ]);
        $resource = State::first();
        UserResource::factory()->create([
            'user_id' => $user->id,
            'resource_id' => $resource->id,
            'resource_type' => get_class($resource),
        ]);

        //District Admin User
        $user = User::factory()->create([
            'code'     => 'deo.admin',
            'email'    => 'deo.admin-ppms@gov.in',
            'is_admin' => 1,
        ]);
        $resource = District::first();
        UserResource::factory()->create([
            'user_id' => $user->id,
            'resource_id' => $resource->id,
            'resource_type' => get_class($resource),
        ]);

        //District User
        $user = User::factory()->create([
            'code'     => 'deo',
            'email'    => 'deo-ppms@gov.in',
        ]);
        $resource = District::first();
        UserResource::factory()->create([
            'user_id' => $user->id,
            'resource_id' => $resource->id,
            'resource_type' => get_class($resource),
        ]);

        //Subdivision User
        $user = User::factory()->create([
            'code'     => 'sdo',
            'email'    => 'sdo-ppms@gov.in',
        ]);
        $resource = Subdivision::first();
        UserResource::factory()->create([
            'user_id' => $user->id,
            'resource_id' => $resource->id,
            'resource_type' => get_class($resource),
        ]);

        //BlockMuni User
        $user = User::factory()->create([
            'code'     => 'bdo',
            'email'    => 'bdo-ppms@gov.in',
        ]);
        $resource = BlockMuni::first();
        UserResource::factory()->create([
            'user_id' => $user->id,
            'resource_id' => $resource->id,
            'resource_type' => get_class($resource),
        ]);

    }
}
