<?php

namespace Tests\Feature;


use Tests\TestCase;
use App\Http\Classes\AdapterTest;
use Exception;

class AdapterTestTest extends TestCase
{

    /** @test */
    public function its_throws_an_exception_if_field_being_set_not_found()
    {
        $adapterTest = new AdapterTest();

        $this->expectException(Exception::class);

        $adapterTest->newField = 'newField';
    }

    /** @test */
    public function its_throws_an_exception_when_accessing_non_existent_field()
    {
        $adapterTest = new AdapterTest();

        $this->expectException(Exception::class);

        $nonExistingField = $adapterTest->nonExistingField;
    }

    /** @test */
    public function its_throws_no_exception_when_setting_value_of_existing_field()
    {
        $adapterTest = new AdapterTest();

        $this->expectNotToPerformAssertions();

        $adapterTest->name = "James Bond";
    }

    /** @test */
    public function its_throws_no_exception_when_accessing_existing_field()
    {
        $adapterTest = new AdapterTest();

        $this->expectNotToPerformAssertions();

        $name = $adapterTest->name;
    }
}
