<?php

class CategoryModel extends BaseModel {
    const TABLE = 'category';
    public function getAll($select = ['*'], $orderBy = [], $limit = 15) {
        return $this->all(self::TABLE, $select = ['*'], $orderBy = [], $limit = 15);
    }

    public function createCategory($data) {
        $this->create(self::TABLE, $data);
    }
    public function findById($id) {
        return $this->find(self::TABLE, $id);
    }

    public function deleteCategory($id) {
        $this->destroy(self::TABLE, $id);
    }

    public function updateCategory($id, $data) {
        $this->update(self::TABLE, $id, $data);
    }

    public function searchCategory($str) {
        $sql = "select * from category where name like '%$str%'";
        $result = $this->query($sql);
        $users = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $users[] = $row;
        }
        return $users;
    }

    public function findIndexByCategoryName($category) {
        $sql = "select * from category where name = '$category'";
        $result = $this->query($sql);
        $row = mysqli_fetch_assoc($result);
        return $row['category_id'];
    }
}
