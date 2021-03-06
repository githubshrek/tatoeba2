<?php
$this->Html->script('downloads/export.ctrl.js', ['block' => 'scriptBottom']);
$languagesList = $this->Languages->onlyLanguagesArray();
$this->AngularTemplate->addTemplate(
  $this->element('custom_export_download_button'),
  'custom-export-download-button-template'
);
?>

<div ng-cloak
     id="custom-export"
     class="md-whiteframe-1dp">
  <md-toolbar class="md-hue-2">
    <div class="md-toolbar-tools">
      <md-button ng-show="new_export" ng-click="new_export = ''" class="md-icon-button">
        <md-icon>arrow_back</md-icon>
      </md-button>
      <h2 ng-show="!new_export"><?= __('Custom export') ?></h2>
      <h2 ng-show="new_export == 'list'"><?= __('List') ?></h2>
      <h2 ng-show="new_export == 'pairs'"><?= __('Language pair') ?></h2>
    </div>
  </md-toolbar>

  <md-content layout-margin>
    <div ng-show="!new_export">
      <md-button class="export-card md-raised" ng-click="new_export = 'list'">
        <div>
          <md-icon>list</md-icon>
          <strong><?= __('List') ?></strong>
        </div>
        <small><?= __('Download all sentences from a list') ?></small>
      </md-button>

      <md-button class="export-card md-raised" ng-click="new_export = 'pairs'">
        <div>
          <md-icon>translate</md-icon>
          <strong><?= __('Language pair') ?></strong>
        </div>
        <small><?= __('Download all sentences in language A along with all translations in a language B') ?></small>
      </md-button>
    </div>

    <div ng-show="new_export == 'list'">
      <div layout="row" layout-align="center">
        <label for="listToExport" flex="33"><?= __('Choose a list:') ?></label>
        <div flex>
        <?php
          $this->loadHelper('Lists');
          $listOptions = $this->Lists->listsAsSelectable($searchableLists);
          echo $this->Form->input('list', [
            'id' => 'listToExport',
            'ng-model' => 'selectedList',
            'options' => $this->safeForAngular($listOptions),
            'label' => false,
          ]);
        ?>
        </div>
      </div>
      <custom-export-download-button
          <?php /* @translators: button to download a list (verb) */ ?>
          text="<?= h(__('Download list')) ?>"
          type="list"
          fields="['id', 'lang', 'text']"
          params="{'list_id': selectedList}"
          ng-disabled="!selectedList">
      </custom-export-download-button>
    </div>

    <div ng-show="new_export == 'pairs'">
      <div layout="column">
        <div layout="row" layout-align="start center" flex>
        <?php
          echo $this->Html->tag(
            'label',
            __('Sentence language:'),
            ['for' => 'from']
          );
          echo $this->element(
            'language_dropdown',
            [
              'name' => 'from',
              'languages' => $languagesList,
              'selectedLanguage' => 'selectedFrom',
            ]
          );
        ?>
        </div>

        <div layout="row" layout-align="start center" flex>
        <?php
          echo $this->Html->tag(
            'label',
            __('Translation language:'),
            ['for' => 'to']
          );
          echo $this->element(
            'language_dropdown',
            [
              'name' => 'to',
              'languages' => $languagesList,
              'selectedLanguage' => 'selectedTo',
            ]
          );
        ?>
        </div>
      </div>

      <custom-export-download-button
          <?php /* @translators: button to download all sentences in language A along
                   with all translations in a language B (verb) */ ?>
          text="<?= h(__('Download language pair')) ?>"
          type="pairs"
          fields="['id', 'text', 'trans_id', 'trans_text']"
          params="{'from': selectedFrom.code, 'to': selectedTo.code}"
          ng-disabled="!selectedFrom.code || !selectedTo.code">
      </custom-export-download-button>
    </div>
  </md-content>
</div>
