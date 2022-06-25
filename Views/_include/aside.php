					<div class="d-none d-md-block mb-4 pb-2">
						<!-- STR: ms-outlogin { -->
						<div class="ms-outlogin border p-3 bg-white fw-normal">
						<form method="post" action="" id="basic_outlogin" name="basic_outlogin" autocomplete="off">
							<div class="login-box float-start">
								<div class="form-group">
									<label for="outlogin_mb_id" class="sr-only">아이디<strong class="sr-only"> 필수</strong></label>
									<div class="input-group">
										<!-- div class="input-group-prepend">
											<span class="input-group-text"><i class="fa fa-user text-muted"></i></span>
										</div -->
										<input type="text" name="mb_id" id="outlogin_mb_id" class="form-control-lg required" placeholder="아이디">
									</div>
								</div>
								<div class="form-group mt-1">
									<label for="outlogin_mb_password" class="sr-only">비밀번호<strong class="sr-only"> 필수</strong></label>
									<div class="input-group">
										<!-- div class="input-group-prepend">
											<span class="input-group-text"><i class="fa fa-lock text-muted"></i></span>
										</div -->
										<input type="password" name="mb_password" id="outlogin_mb_password" class="form-control-lg required" placeholder="비밀번호">
									</div>
								</div>
							</div>
							<div class="login-btn float-end">
								<div class="form-group">
									<button type="submit" class="btn btn-lg">
										로그인
									</button>
								</div>
							</div>
						</form>
						</div>
						<!-- } END: ms-outlogin -->

						<!-- STR: login-link { -->
						<div class="login-link border border-top-0 clearfix">
							<ul class="d-flex justify-content-between">
							<li>
								<div class="form-group mb-0">
									<div class="custom-control custom-switch">
										<input type="checkbox" name="auto_login" class="custom-control-input remember-me" id="outlogin_remember_me">
										<label class="custom-control-label float-left" for="outlogin_remember_me">자동로그인</label>
									</div>
								</div>
							<li><span class="ms-bar"></span></li>
							<li><a href="javascript:void(0)">회원가입</a></li>
							<li><span class="ms-bar"></span></li>
							<li><a href="javascript:void(0)" class="win_password_lost">정보찾기</a></li>
							</ul>
						</div>
						<!-- } END: login-link -->

						<!-- } END: ms-chat -->
						<div class="ms-chat mt-2">
							<ul class="d-flex tab-nav">
							<li class="on"><p>게임</p><span class="num">0</span></li>
							<li><p>스포츠</p><span class="num">0</span></li>
							<li><p>픽톡</p><span class="num">0</span></li>
							</ul>

							<div class="body"></div>

							<div class="chat-input">
								<ul>
								<li class="float-start"><input type="text" name="memo" id="chat_memo" value="" maxlength="290" placeholder="메세지 입력하기" /></li>
								<li class="float-end"><span class="chat-btn"><i class="fa fa-arrow-up"></i></span></li>
								</ul>
							</div>
						</div>
						<!-- } END: ms-chat -->

						<div class="result-box mt-2">
							<div class="head">
								최근 결과
								<div class="txt">동행복권</div>
							</div>

							<div class="body">
								<div class="body-box" id="latest_result">
									<ul>
									<li>
										<div class="title"><p>파워볼</p><span>(<strong class="text-primary">222</strong> 회차)</span></div>
										<div class="float-end">
											<span class="pball small blue">홀</span>
											<span class="pball small red">오버</span>
											<span class="pball small blue">중</span>
											<span class="pball small red">짝</span>
											<span class="pball small red">오버</span>
										</div>
									</li>
									</ul>
								</div>
							</div>
						</div>

						<div class="result-box mt-2">
							<div class="head">
								랭킹
							</div>

							<div class="body">
								<div class="body-box" id="latest_result">
									<ul>
									<li>
										<div class="id">아이디</div>
										<div class="float-end text-danger">
											<span>55,550</span>
										</div>
									</li>
									</ul>
								</div>
							</div>
						</div>
					</div>


