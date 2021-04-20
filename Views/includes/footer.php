<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="exampleModalLabel">Ready to Leave?</h6>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="text-center">Select "Logout" below if you are ready to end your current session.</p>
            </div>
            <div class="modal-footer">
                <button class="btn button-main btn-close" type="button" data-dismiss="modal">CANCEL</button>
                <a class="btn button-main btn-active" href="login">LOGOUT</a>
            </div>
        </div>
    </div>
</div>
</div>
<footer class="sticky-footer bg-white mt-5">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; <a href="">Odyssey-ks.com</a> 2021</span>
        </div>
    </div>
</footer>
</div>
<script src="Views/assets/js/jquery.min.js"></script>
<script src="Views/assets/js/bootstrap.bundle.min.js"></script>
<script src="Views/assets/js/Chart.min.js"></script>
<script src="Views/assets/js/chart-area-demo.js"></script>
<script src="Views/assets/js/chart-pie-demo.js"></script>
<script src="Views/assets/js/toggle.min.js"></script>
<script src="Views/assets/js/jquery.easing.min.js"></script>
<script src="Views/assets/js/jquery.dataTables.min.js"></script>
<script src="Views/assets/js/dataTables.bootstrap4.js"></script>
<script src="Views/assets/js/datatables-demo.js"></script>
<script src="Views/assets/fileuploader/jquery.fileuploader.min.js" type="text/javascript"></script>
<script src="Views/assets/fileuploader/custom.js" type="text/javascript"></script>
<script src="Views/assets/js/main.js"></script>
<script>
    $('#wrapper .sidebar .nav-item a').each(function () {
        if (window.location.pathname.indexOf($(this).attr('href')) > -1) {
            $(this).addClass('active');
        }
    });
</script>
</body>

</html>