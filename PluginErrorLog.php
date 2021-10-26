<?php
class PluginErrorLog{
  public function page_insert(){
    /**
     * Settings
     */
    $plugin_settings = wfPlugin::getPluginSettings('error/log', true);
    /**
     * id
     */
    wfRequest::set('id', wfCrypt::getUid());
    /**
     * sql
     */
    wfPlugin::includeonce('wf/yml');
    $sql = new PluginWfYml(__DIR__.'/mysql/sql.yml', 'insert');
    /**
     * Insert
     */
    wfPlugin::includeonce('wf/mysql');
    $mysql = new PluginWfMysql();
    $mysql->event = false;
    $mysql->open($plugin_settings->get('settings/mysql'));
    $mysql->execute($sql->get());
    /**
     * Output json
     */
    exit(json_encode(array('id' => wfRequest::get('id'))));
  }
}
