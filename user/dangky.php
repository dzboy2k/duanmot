<main>
  <!-- Login 8 - Bootstrap Brain Component -->
  <section class="bg-light p-3 p-md-4 p-xl-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-xxl-11">
          <div class="card border-light-subtle shadow-sm">
            <div class="row g-0">
              <div class="col-12 col-md-6 d-flex align-items-center justify-content-center">
                <div class="col-12 col-lg-11 col-xl-10">
                  <div class="card-body p-3 p-md-4 p-xl-5">
                    <!-- -- -->
                    <div class="row">
                      <div class="col-12">
                        <div class="mb-5">
                          <div class="text-center mb-4">
                            <a href="#!">
                              <img src="img/logonew.png" alt="" height="57" />
                            </a>
                          </div>
                          <h4 class="text-center">Đăng Ký</h4>
                        </div>
                      </div>
                    </div>
                    <!-- -- -->
                    <div class="row">
                      <div class="col-12">
                        <div class="d-flex gap-3 flex-column">
                          <a href="#!" class="btn btn-lg btn-outline-dark">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-google" viewBox="0 0 16 16">
                              <path d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z" />
                            </svg>
                            <span class="ms-2 fs-6">Đăng ký với google</span>
                          </a>
                        </div>
                        <p class="text-center mt-4 mb-5">
                          Hoặc đăng ký với
                        </p>
                      </div>
                    </div>
                    <form action="?act=dangky" method="post" enctype="multipart/form-data">
                      <div class="row gy-3 overflow-hidden">
                        <!-- Tên -->
                        <div class="col-12">
                          <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="ten" id="email" placeholder="Nhập tên" required />
                            <label for="ten" class="form-label">Họ và tên</label>
                          </div>
                        </div>
                        <!-- EMAIL -->
                        <div class="col-12">
                          <div class="form-floating mb-3">
                            <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" required />
                            <label for="email" class="form-label">Email</label>
                          </div>
                        </div>
                        <!-- PHONE  -->
                        <div class="col-12">
                          <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="phone" id="phone" value="" placeholder="Nhập số điện thoại" required />
                            <label for="phone" class="form-label">Số điện thoại</label>
                          </div>
                        </div>
                        <!-- ĐỊA CHI -->
                        <div class="col-12">
                          <div class="form-floating mb-3">
                            <input type="text" class="form-control" name="address" id="address" value="" placeholder="Nhập địa chỉ" required />
                            <label for="diachi" class="form-label">Địa chỉ</label>
                          </div>
                        </div>

                        <!-- --AVATAR -->
                        <div class="col-12">
                          <div class="mb-3">
                            <label class="text-secondary" for="avartar">
                              Ảnh đại diện
                            </label>
                            <input class="form-control" type="file" value="" name="avatar" id="avatar" />
                          </div>
                        </div>
                        <!-- Password -->
                        <div class="col-12">
                          <div class="form-floating mb-3">
                            <input type="password" class="form-control" name="pass" id="password" value="" placeholder="Password" required />
                            <label for="pass" class="form-label">Password</label>
                          </div>
                        </div>

                        <!-- BTN LOGIN -->
                        <div class="col-12">
                          <div class="d-grid">
                            <button name="btnsubmit" class="btn btn-dark btn-lg" type="submit">
                              Đăng ký
                            </button>
                          </div>
                        </div>
                      </div>
                    </form>
                    <div class="row">
                      <div class="col-12">
                        <div class="d-flex gap-2 gap-md-4 flex-column flex-md-row justify-content-md-center mt-5">
                          Đã có tài khoản?
                          <a href="?act=dangnhap" class="link-secondary text-decoration-none">Đăng nhập</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- --Box ảnh bên phải  -->
              <div class="col-12 col-md-6">
                <img class="img-fluid rounded-start w-100 h-100 object-fit-cover" loading="lazy" src="img/form dk2.jpg" alt="" />
              </div>
              <!-- --- -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>