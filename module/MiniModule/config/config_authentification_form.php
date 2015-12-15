<?php

return array(
    'elements' => array(
    // la saisie du login (type text)
        array(
            'spec' => array(
                'type' => 'Zend\Form\Element\Password',
                'name' => 'mdp',
                'attributes' => array(
                    'size' => '20',
                ),
                'options' => array(
                'label' => 'Mot de passe: ',
                ),
            ),
        ),
        array(
            'spec' => array(
                'type' => 'Zend\Form\Element\Submit',
                'name' => 'submit',
                'attributes' => array(
                    'value' => 'Suite',
                ),
            ),
        ),
        array(
            'spec' => array(
                'type' => 'Zend\Form\Element\Submit',
                'name' => 'Inscription',
                'attributes' => array(
                    'value' => 'Inscrit toi',
                ),
            ),
        ),
    ),
);