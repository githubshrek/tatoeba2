<?php
namespace App\Test\TestCase\Command;

use App\Command\FixLinksTableLangsCommand;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\ConsoleIntegrationTestTrait;
use Cake\TestSuite\TestCase;

class FixLinksTableLangsCommandTest extends TestCase
{
    use ConsoleIntegrationTestTrait;

    public $fixtures = [
        'app.sentences',
        'app.links',
    ];

    public function setUp() {
        parent::setUp();
        $this->Sentences = TableRegistry::getTableLocator()->get('Sentences');
        $this->Links = TableRegistry::getTableLocator()->get('Links');
        $this->useCommandRunner();
    }

    public function testExecute() {
        $id = 56;
        $sentence = $this->Sentences->get($id);
        $oldLang1 = $this->Links->find()
                                ->where(['translation_id' => $id])
                                ->first()
                                ->translation_lang;
        $oldLang2 = $this->Links->find()
                                ->where(['sentence_id' => $id])
                                ->first()
                                ->sentence_lang;

        $this->exec('fix_links_table_langs');

        $newLang1 = $this->Links->find()
                                ->where(['translation_id' => $id])
                                ->first()
                                ->translation_lang;
        $newLang2 = $this->Links->find()
                                ->where(['sentence_id' => $id])
                                ->first()
                                ->sentence_lang;
        $this->assertNotEquals($oldLang1, $newLang1);
        $this->assertNotEquals($oldLang2, $newLang2);
        $this->assertEquals($sentence->lang, $newLang1);
        $this->assertEquals($sentence->lang, $newLang2);
    }
}
