<?php

// use function PHPSTORM_META\sql_injection_subst;

class BookModel extends BaseModel {
    const TABLE = 'book';
    const TABLE_FAVOURITE = 'favourite_book';
    public function getAll($select = ['*'], $orderBy = [], $limit = 15) {
        return $this->all(self::TABLE, $select, $orderBy, $limit);
    }

    public function getById($id) {
        return $this->find(self::TABLE, $id);
    }

    public function getCategoryNameById($id) {
        $sql = "select * from book b join category c on b.category_id = c.category_id where b.book_id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(['id' => $id]);
        return $stmt->fetch()['name'];
    }

    public function createBook($data) {
        return $this->create(self::TABLE, $data);
    }

    public function updateBook($id, $data) {
        return $this->update(self::TABLE, $id, $data);
    }

    public function deleteBook($id) {
        return $this->destroy(self::TABLE, $id);
    }

    public function getByCategory($category) {
        $sql = '';
        $stmt = '';
        if ($category == 'All') {
            $sql = "select * from book limit 10";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
        } else {
            $sql = "select * from book b join category c on b.category_id = c.category_id where name=:name limit 10";
            $stmt = $this->db->prepare($sql);
            $stmt->execute(['name' => $category]);
        }
        $data = [];
        while ($row = $stmt->fetch()) {
            $data[] = $row;
        }
        return $data;
    }

    public function filterBook($sortby, $categoryName) {
        $sql = '';
        $stmt = '';
        if ($categoryName == 'All') {
            $sql = "select * from book order by $sortby limit 10";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
        } else {
            $sql = "select * from book b join category c on b.category_id = c.category_id where c.name = :name order by :sortby limit 10";
            $stmt = $this->db->prepare($sql);
            $stmt->execute(['name' => $categoryName, 'sortby' => $sortby]);
        }
        $data = [];
        while ($row = $stmt->fetch()) {
            $data[] = $row;
        }
        return $data;
    }

    public function numPage($limit) {
        $sql = "select * from book";
        $result = $this->db->query($sql);
        $num = ceil($result->rowCount() / $limit);
        return $num;
    }

    public function pagination($page, $category) {
        $num = $page * 10 - 10;
        $stmt = '';
        if ($category == 'All') {
            $sql = 'select * from book limit :num, 10';
            // bug of pdo
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':num', $num, PDO::PARAM_INT);
            $stmt->execute();
        } else {
            $sql = "select b.* from book b join category c on b.category_id = c.category_id where c.name = :name limit :num, 10";
            // bug of pdo
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':name', $category, PDO::PARAM_STR);
            $stmt->bindParam(':num', $num, PDO::PARAM_INT);
            $stmt->execute();
        }
        $books = [];
        while ($row = $stmt->fetch()) {
            $books[] = $row;
        }
        return $books;
    }

    public function searchBook($name) {
        $sql = "select * from book where title like :name limit 10";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(['name' => '%' . $name . '%']);
        $books = [];
        while ($row = $stmt->fetch()) {
            $books[] = $row;
        }
        return $books;
    }

    public function createFavouriteBook($data) {
        // check if book and customer already exists in db;
        $sql = "select * from favourite_book where customer_id = :customer_id and book_id = :book_id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute($data);
        if ($stmt->rowCount() >= 1) return;
        $this->create(self::TABLE_FAVOURITE, $data);
    }

    public function getAllFavouriteBookByCustomerId($customerId) {
        $sql = "select * from favourite_book where customer_id = :customer_id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(['customer_id' => $customerId]);
        // get all bookid
        $bookIds = [];
        while ($row = $stmt->fetch()) {
            $bookIds[] = $row['book_id'];
        }
        // get all book by bookid
        $books = [];
        foreach ($bookIds as $bookId) {
            $book = $this->getById($bookId);
            $books[] = $book;
        }
        return $books;
    }
}
