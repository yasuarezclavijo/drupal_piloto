<?php

namespace Drupal\generic_blocks\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Block for titles in start page.
 *
 * @Block(
 *  id = "titles_block",
 *  admin_label = @Translation("Titles block")
 * )
 */
class TitlesBlock extends BlockBase {
    public function blockForm($form, FormStateInterface $form_state) {
        $form = parent::blockForm($form, $form_state);
        $form['title_primary'] = [
            '#type' => 'textfield',
            '#title' => $this->t('Title primary'),
            '#required' => TRUE,
            '#default_value' => $this->configuration['title_block__title_primary'] ?? '',
        ];
        $form['title_second'] = [
            '#type' => 'textfield',
            '#title' => $this->t('Title second'),
            '#required' => TRUE,
            '#default_value' => $this->configuration['title_block__title_second'] ?? '',
        ];
        return $form;
    }
    public function blockSubmit($form, FormStateInterface $form_state) {
        $this->configuration['title_block__title_primary'] = $form_state->getValue('title_primary');
        $this->configuration['title_block__title_second'] = $form_state->getValue('title_second');
    }
    public function build() {
        $build = [
            '#config' => $this->configuration,
            '#theme' => 'title_block'
        ];
        return $build;
    }
}