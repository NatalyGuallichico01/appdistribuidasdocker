<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Ward;
use Illuminate\Database\Eloquent\Collection;

class WardTest extends TestCase
{
    
    public function test_a_ward_has_many_jail()
    {
        $role = new Role;
       $this->assertInstanceOf(Collection::class , $role ->users);
    }
}
