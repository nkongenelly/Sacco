<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\MemberDocumentType;

class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testdocumentTypeTest()
    {
      
        $memeberDocumentType = Member_document_type::pluck('document_type_name')->toArray();

      
        $this->assertEquals(
            [
                "national_id_card",
                "passport_photo",
              ]
    ,$memeberDocumentType
        );

        
    }
}
