 <?php
    /*$names = array(
    'Alex' => array('Age' => 21, 'Hair' => 'Blonde', 'Food' => array('Pizza', 'Pasta')),
    'Billy' => array('Age' => 16, 'Hair' => 'Brown'),
    'Dale' => array('Age' => 49, 'Hair' => 'Blonde')
);

 echo $names['Dale']['Age']; */

    $GLOBALS['level'] = array(
        1 => array(
            'name' => 'Level 1',
            'desc' => 'This is the first level'
        ),
        2 => array(
            'name' => 'Level 2',
            'desc' => 'You\'ve made it to level 2'
        ),
        3 => array(
            'name' => 'Level 1',
            'desc' => 'The last level'
        ),
    );

    function level_data($level, $data)
    {
        if (array_key_exists($level, $GLOBALS['level']) === true) {
            return $GLOBALS['level'][$level][$data];
        } else {
            return false;
        }
    }

    echo level_data(3, 'desc');

    echo '<pre>' .  print_r($GLOBALS['level'], true) . '</pre>';
