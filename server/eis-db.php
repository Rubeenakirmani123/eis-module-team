<?php

  /**
   * EAO IT Services Pvt. Ltd.
   * Copyright reserved @2017

   * File Description :

   * Created on : 27 Mar, 2017 | 9:50:34 PM
   * Author     : Bilal Wani
   * Email      : bilal.wani@eaoservices.com
   */
  /**
   * Description of EisSqlDb
   *
   * @author Bilal Wani
   */
  if ( !class_exists('EisSqlDb') ) {

      class EisSqlDb {

          protected $m_link = null;
          private $m_error_msg;
          private $m_db_name;

          public function __construct($host, $user, $pwd, $database = null) {
              $this->m_error_msg = null;
              if ( $database ) {
                  $this->m_link = new mysqli($host, $user, $pwd, $database);
              } else {
                  $this->m_link = new mysqli($host, $user, $pwd);
              }

              if ( mysqli_connect_errno() ) {
                  $this->m_error_msg = mysqli_connect_error();
                  throw new mysqli_sql_exception;
              }
          }

          /*
           * CreateDb function creates the DATABASE if it does not exist.
           * params: 
           * 1 - db_name (String) - Name of the database to be created
           *
           * return:
           *  On success 0, else error code.
           */

          public function CreateDb($db_name) {
              $query = "CREATE DATABASE IF NOT EXISTS $db_name";
              if ( !$this->IsDbConnReady() ) {
                  $this->SetDbConnectionError();
                  return null;
              }
              $this->m_link->query($query);
              return $this->m_link->errno;
          }

          protected function IsDbConnReady() {
              return $this->m_link;
          }

          protected function SetDbConnectionError() {
              $this->m_link->error = EisErrorMessage::$DB_NOT_CONNECTED;
          }

          
      }

      // ends class EisMySqliDb
  }