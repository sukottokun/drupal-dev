<?php

namespace Drupal\module_hero\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Hero Controller
 * https://www.udemy.com/course/drupal-8-module-development/learn/lecture/10268912#overview
 */
class HeroController extends ControllerBase
{

    public function heroList()
    {

        $heroes = [
            ['name' => 'Heraclius'],
            ['name' => 'Constantine III'],
            ['name' => 'Heraklonas'],
            ['name' => 'Constans II'],
            ['name' => 'Constantine IV'],
            ['name' => 'Justinian II'],
        ];

        return [
            '#theme' => 'hero_list',
            '#items' => $heroes,
            '#title' => $this->t('The Greeks Take Back the Empire.')
        ];
    }
}
