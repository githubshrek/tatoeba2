<?php
/* User Fixture generated on: 2014-09-14 16:12:01 : 1410711121 */
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

class UsersFixture extends TestFixture {
	public $name = 'User';

	public $fields = array(
		'id' => ['type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false],
		'username' => ['type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'],
		'password' => ['type' => 'string', 'null' => true, 'default' => null, 'length' => 62, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'],
		'email' => ['type' => 'string', 'null' => false, 'length' => 100, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'],
		'since' => ['type' => 'datetime', 'null' => false, 'default' => '0000-00-00 00:00:00'],
		'last_time_active' => ['type' => 'integer', 'null' => false, 'default' => '0', 'unsigned' => false],
		'level' => ['type' => 'integer', 'null' => false, 'default' => '0', 'length' => 2, 'unsigned' => false],
		'group_id' => ['type' => 'integer', 'null' => false, 'default' => null, 'length' => 4, 'unsigned' => false],
		'send_notifications' => ['type' => 'boolean', 'null' => false, 'default' => '1'],
		'name' => ['type' => 'string', 'null' => false, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'],
		'birthday' => ['type' => 'date', 'null' => true, 'default' => null],
		'description' => ['type' => 'binary', 'null' => false, 'default' => null],
		'settings' => ['type' => 'text', 'null' => false, 'default' => null],
		'homepage' => ['type' => 'string', 'null' => false, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'],
		'image' => ['type' => 'string', 'null' => false, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'],
		'country_id' => ['type' => 'string', 'null' => true, 'default' => null, 'length' => 2, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'],
		'audio_license' => ['type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'],
		'audio_attribution_url' => ['type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'],
		'_constraints' => ['primary' => ['type' => 'primary', 'columns' => ['id']], 'login' => ['type' => 'unique', 'columns' => 'username'], 'email' => ['type' => 'unique', 'columns' => 'email']],
		'_options' => ['charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB']
	);

	public $records = array(
		array(
			'id' => '1',
			'username' => 'admin',
			'password' => '0 $2a$10$C9HUn1u98XMMV/J2DP9F.eSPrJY0UiX7Z1PsDiWoGakXsSzwpUQ/e', // blowfish(md5('ze@9422#5dS?!99xx' . '123456'))
			'email' => 'admin@example.com',
			'since' => '2013-04-07 12:15:16',
			'last_time_active' => '1397515014',
			'level' => '1',
			'group_id' => '1',
			'send_notifications' => 1,
			'name' => '',
			'birthday' => NULL,
			'description' => '',
			'settings' => '{"is_public":"0","lang":null}',
			'homepage' => '',
			'image' => '',
			'country_id' => NULL,
			'audio_license' => NULL,
			'audio_attribution_url' => NULL,
		),
		array(
			'id' => '2',
			'username' => 'corpus_maintainer',
			'password' => '0 $2a$10$si98GpL3psq5k1EKh/koVup8GfGoB1.hjdRCbgKlzofvUbRkRBwjC', // blowfish(md5('ze@9422#5dS?!99xx' . '123456'))
			'email' => 'corpus_maintainer@example.com',
			'since' => '2013-04-07 12:15:50',
			'last_time_active' => '0',
			'level' => '1',
			'group_id' => '2',
			'send_notifications' => 1,
			'name' => '',
			'birthday' => NULL,
			'description' => '',
			'settings' => '{"is_public":"0","lang":null}',
			'homepage' => '',
			'image' => '',
			'country_id' => NULL,
			'audio_license' => NULL,
			'audio_attribution_url' => NULL,
		),
		array(
			'id' => '3',
			'username' => 'advanced_contributor',
			'password' => '0 $2a$10$YeMYysi2Wkiu1LPdm2SAEeD7tfYsXKoAKDGKutQvOPcKKcdpte.3K', // blowfish(md5('ze@9422#5dS?!99xx' . '123456'))
			'email' => 'advanced_contributor@example.com',
			'since' => '2013-04-07 12:16:37',
			'last_time_active' => '0',
			'level' => '1',
			'group_id' => '3',
			'send_notifications' => 1,
			'name' => '',
			'birthday' => NULL,
			'description' => '',
			'settings' => '{"is_public":"0","lang":null}',
			'homepage' => '',
			'image' => '',
			'country_id' => NULL,
			'audio_license' => NULL,
			'audio_attribution_url' => NULL,
		),
		array(
			'id' => '4',
			'username' => 'contributor',
			'password' => '0 $2a$10$Dn8/JT1xViULUEBCR5HiquLCXXB4/K3N2Nzc0PRZ.bfbmoApO55l6', // blowfish(md5('ze@9422#5dS?!99xx' . '123456'))
			'email' => 'contributor@example.com',
			'since' => '2013-04-07 12:17:02',
			'last_time_active' => '0',
			'level' => '1',
			'group_id' => '4',
			'send_notifications' => 1,
			'name' => '',
			'birthday' => NULL,
			'description' => '',
			'settings' => '{"is_public":"0","lang":"fra,deu"}',
			'homepage' => '',
			'image' => '',
			'country_id' => NULL,
			'audio_license' => NULL,
			'audio_attribution_url' => NULL,
		),
		array(
			'id' => '5',
			'username' => 'inactive',
			'password' => '0 $2a$10$k4WEM.b.68FriHgL3TbOpOrEWb35kMSwzkjvrLd5bzLExnFpVxAQa', // blowfish(md5('ze@9422#5dS?!99xx' . '123456'))
			'email' => 'inactive@example.com',
			'since' => '2013-04-07 12:17:29',
			'last_time_active' => '0',
			'level' => '1',
			'group_id' => '5',
			'send_notifications' => 1,
			'name' => '',
			'birthday' => NULL,
			'description' => '',
			'settings' => '{"is_public":"0","lang":null}',
			'homepage' => '',
			'image' => '',
			'country_id' => NULL,
			'audio_license' => NULL,
			'audio_attribution_url' => NULL,
		),
		array(
			'id' => '6',
			'username' => 'spammer',
			'password' => '0 $2a$10$p6lW5xX5OXliZixaywnbjOj8Ye0cTGvfw2peMcqLNrisnydCjQnL', // blowfish(md5('ze@9422#5dS?!99xx' . '123456'))
			'email' => 'spammer@example.com',
			'since' => '2013-04-07 12:17:54',
			'last_time_active' => '0',
			'level' => '1',
			'group_id' => '6',
			'send_notifications' => 1,
			'name' => '',
			'birthday' => NULL,
			'description' => '',
			'settings' => '{"is_public":"0","lang":null}',
			'homepage' => '',
			'image' => '',
			'country_id' => NULL,
			'audio_license' => NULL,
			'audio_attribution_url' => NULL,
		),
		array(
			'id' => '7',
			'username' => 'kazuki',
			'password' => '1 $2a$10$eSfvBiKsuMQsKq0B2sGyuukXNBNPwXXqSZJfzFUu/6b4vZYnehn/2', // blowfish('myAwesomePassword')
			'email' => 'kazuki@example.net',
			'since' => '2013-04-22 19:20:11',
			'last_time_active' => '1397514924',
			'level' => '1',
			'group_id' => '4',
			'send_notifications' => 0,
			'name' => '',
			'birthday' => NULL,
			'description' => '',
			'settings' => '{"is_public":"0","lang":null,"default_license":"CC0 1.0"}',
			'homepage' => '',
			'image' => '',
			'country_id' => NULL,
			'audio_license' => NULL,
			'audio_attribution_url' => NULL,
		),
		array(
			'id' => '8',
			'username' => 'mr_old_style_passwd',
			'password' => 'dc59e60a5353bf329d0c961185055226',
			'email' => 'mr_old_style_passwd@example.net',
			'since' => '2013-04-22 19:20:11',
			'last_time_active' => '1397514924',
			'level' => '1',
			'group_id' => '4',
			'send_notifications' => 1,
			'name' => '',
			'birthday' => NULL,
			'description' => '',
			'settings' => '{"is_public":"0","lang":null}',
			'homepage' => '',
			'image' => '',
			'country_id' => NULL,
			'audio_license' => NULL,
			'audio_attribution_url' => NULL,
		),
	);

	public function init() {
		$this->records[] = [
			'id' => '9',
			'username' => 'new_member',
			'password' => '0 $2a$10$C9HUn1u98XMMV/J2DP9F.eSPrJY0UiX7Z1PsDiWoGakXsSzwpUQ/e',
			'email' => 'new_member@example.net',
			'since' => date('Y-m-d H:i:s'),
			'last_time_active' => null,
			'level' => '1',
			'group_id' => '4',
			'send_notifications' => 1,
			'name' => '',
			'birthday' => NULL,
			'description' => '',
			'settings' => '{"is_public":"0","lang":null}',
			'homepage' => '',
			'image' => '',
			'country_id' => NULL,
			'audio_license' => NULL,
			'audio_attribution_url' => NULL,
		];
		parent::init();
	}
}
