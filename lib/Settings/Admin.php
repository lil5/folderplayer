<?php
/**
 * ownCloud - folderplayer
 *
 * This file is licensed under the Affero General Public License version 3 or
 * later. See the COPYING file.
 *
 * @author Aleksandar Veljkovic <coa.develop@gmail.com>
 * @copyright Aleksandar Veljkovic 2016
 */

namespace OCA\Folderplayer\AppInfo;

class Admin implements OCP\Settings\ISettings {

  public function __construct(Collector $collector,
                              IConfig $config,
                              IL10N $l,
                              IDateTimeFormatter $dateTimeFormatter,
                              IJobList $jobList
  ) {
          die('ISSSSSSSSSSS');
          $this->collector = $collector;
          $this->config = $config;
          $this->l = $l;
          $this->dateTimeFormatter = $dateTimeFormatter;
          $this->jobList = $jobList;
  }

}
