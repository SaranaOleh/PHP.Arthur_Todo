<?php

use Entity\Image;

//class ModelImages extends Model{
//
//    public function getAll():array{
//        return Image::fromAssocies($this->db->images->getAll());
//    }
//
//    public function getById(int $id):Image{
//        $img = new Image();
//        $img->fromAssoc($this->db->images->get($id));
//        return $img;
//    }
//
//    public function addImage(Image $image):void{
//        $this->db->images->insert([
//           "name"=>$image->name,
//           "url"=>$image->url
//        ]);
//    }
//}
class ModelImages extends Model{

    public function getAll():array{
        return Image::fromAssocies($this->db->notes->getAll());
    }

    public function getAllById(int $id):array {
        return Image::fromAssocies($this->db->notes->where("author",$id)->all());
    }

    public function deleteNote(int $id):void{
        $this->db->notes->delete($id);
    }

    public function getById(int $id):Image{
        $img = new Image();
        $img->fromAssoc($this->db->notes->get($id));
        return $img;
    }

    public function addNote(string $text,int $author):void{
        $this->db->notes->insert([
            "note"=>$text,
            "author"=>$author
        ]);
    }
}