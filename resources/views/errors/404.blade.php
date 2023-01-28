<!DOCTYPE html>
<html lang="en">


@include('backend.admin.partials.header')




<main>
    <div class="container">
        <section class="section error-404 min-vh-100 d-flex flex-column align-items-center justify-content-center">
            <h1>404</h1>
            <h2>The page you are looking for doesn't exist.</h2>
            <a class="btn" href="/">Back to home</a> <img src="assets/img/not-found.svg" class="img-fluid py-5" alt="Page Not Found">
            <div class="credits"> Love by <a href="/">we</a></div>
        </section>
    </div>
</main>
<a href="/" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>






@include('backend.admin.partials.footer')

</html>
