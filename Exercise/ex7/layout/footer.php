</div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <span>&copy; <?php echo date("Y"); ?> CRUD APP</span><br>
            <?php
                                                        
                $current_file_name = basename($_SERVER['PHP_SELF']);
 
                $file_last_modified = filemtime($current_file_name);
                               
                echo "Last modified File: ". $current_file_name ."<br>Date and time:" .date("F d Y H:i:s.", $file_last_modified);
            ?>                            
        </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

