<?php

namespace Drupal\module_hero\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provide a sample block
 * 
 * @Block(
 *  id = "module_hero_hero",
 *  admin_label = @Translation("Example Hero Block")
 * )
 */
class HeroBlock extends BlockBase
{
    /**
     * {@inheritdoc}
     */
    public function build()
    {

        $heroes = [
            ['hero_name' => 'Heraclius', 'real_name' => 'test'],
            ['hero_name' => 'Constantine III', 'real_name' => 'test'],
            ['hero_name' => 'Heraklonas', 'real_name' => 'test'],
            ['hero_name' => 'Constans II', 'real_name' => 'test'],
            ['hero_name' => 'Constantine IV', 'real_name' => 'test'],
            ['hero_name' => 'Justinian II', 'real_name' => 'test'],
        ];

        $table = [
            '#type' => 'table',
            '#header' => [
                $this->t('Hero name'),
                $this->t('Real name'),
            ]
        ];

        foreach ($heroes as $hero) {
            $table[] = [
                'hero_name' => [
                    '#type' => 'markup',
                    '#markup' => $hero['hero_name'],
                ],
                'real_name' => [
                    '#type' => 'markup',
                    '#markup' => $hero['real_name'],
                ],
            ];
        }

        return $table;
    }
}
