<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Member_document_type;

class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
      
        $memeberDocumentType = Member_document_type::all();

      
        $this->assertEquals([
            ['document_type_name' => 'national_id_card',
            'document_type_name' => 'passport_photo',
                'deleted'=>0,
                'deleted_on'=>null,
                'deleted_by'=>null,
                'created_by'=>null,
                'created_at'=>null,
                'updated_at'=>null,
            ]
    ],$memeberDocumentType
        );

        
    }
}
