<?php

namespace App\Model\Table;
use Cake\ORM\Table;

class ItemsTable extends Table
{
public function initialize(array $config)
    {
        $this->setTable('items');
        $this->setDisplayField('title');
        $this->setDisplayField('creator');
        $this->setDisplayField('price');
        $this->setDisplayField('description');
        $this->setPrimaryKey('id');
        

        
        // for CakePHP 3.0.x-3.3.x, use the following lines instead of the previous:
        // $this->table('users');
        // $this->displayField('username');
        // $this->primaryKey('id');

        $this->addBehavior('Upload', [
            // You can configure as many upload fields as possible,
            // where the pattern is `field` => `config`
            //
            // Keep in mind that while this plugin does not have any limits in terms of
            // number of files uploaded per request, you should keep this down in order
            // to decrease the ability of your users to block other requests.
            'photo' => [
                'fields' =>[
                'dir' => 'photo_dir',
                    'size' => 'photo_size', 
                    'type' => 'photo_type'
                ],
                
               'nameCallback' => function ($table, $entity, $data, $field, $settings) {
                    return strtolower($data['name']);
                },
                'transformer' =>  function ($table, $entity, $data, $field, $settings) {
                    $extension = pathinfo($data['name'], PATHINFO_EXTENSION);

                    // Store the thumbnail in a temporary file
                    $tmp = tempnam(sys_get_temp_dir(), 'upload') . '.' . $extension;

                    // Use the Imagine library to DO THE THING
                    $size = new \Imagine\Image\Box(40, 40);
                    $mode = \Imagine\Image\ImageInterface::THUMBNAIL_INSET;
                    $imagine = new \Imagine\Gd\Imagine();

                    // Save that modified file to our temp file
                    $imagine->open($data['tmp_name'])
                        ->thumbnail($size, $mode)
                        ->save($tmp);

                    // Now return the original *and* the thumbnail
                    return [
                        $data['tmp_name'] => $data['name'],
                        $tmp => 'thumbnail-' . $data['name'],
            ];
                },
                        
                         'deleteCallback' => function ($path, $entity, $field, $settings) {
                    // When deleting the entity, both the original and the thumbnail will be removed
                    // when keepFilesOnDelete is set to false
                    return [
                        $path . $entity->{$field},
                        $path . 'thumbnail-' . $entity->{$field}
                    ];
                },
                'keepFilesOnDelete' => false
                        ]
        ]);
    }
}


