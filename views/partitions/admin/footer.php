
            <footer>
                <div class="footer-group">
                    <a href="">Private Policy</a>
                    <a href="">Term of use</a>
                </div>
            
                <div class="footer-group">
                    <a href="">Copyright 2020 <span>BookStore</span> All Right Reserved</a>
                </div>    
            </footer>
    <!-- JS-->
    <script>
        function toggleMenu(){
            let toggle = document.querySelector('.toggle');
            let navigation = document.querySelector('.navigation');
            let main = document.querySelector('.main');
            toggle.classList.toggle('active');
            navigation.classList.toggle('active');
            main.classList.toggle('active');
        }
    </script>
    <script src="../public/admin/js/Validator.js"></script>
    <script src="../public/admin/js/user.js"></script>
    <script src="../public/admin/js/category.js"></script>
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
        <script>
            CKEDITOR.replace('description');
        </script>
    <script src="../public/admin/js/book.js"></script>
</body>
</html>