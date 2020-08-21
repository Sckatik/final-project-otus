<header class="user">
    <div class="box">
        @include('account.blocks.header.user.avatar')
        <div class="contenido">
            @include('account.blocks.header.user.userInfo')
            @include('account.blocks.header.user.menuUserInfo')
        </div>
    </div>
</header>
<!--<nav class="user">
    <ul class="idTabs">
        <li id="favorites" class="selected">Избранные</li>
        <li id="views-user">Просмотренные</li>
        <li id="settings">Настройки</li>
    </ul>
</nav>
<div class="content">
    <div class="upge active" id="favorites" >
        <h2>My favorites</h2>
        <div id="items_movies">
            <article class="simple movies" id="p812">
                <div class="poster">
                    <img src="https://demo.ews.pe/dooplay/wp-content/uploads/2020/05/or06FN3Dka5tukK1e9sl16pB3iy-185x278.jpg" alt="Avengers: Endgame">
                    <div class="profile_control animation-1">
                        <span>
                            <a href="https://demo.ews.pe/dooplay/movies/avengers-endgame/">View</a>
                        </span>
                        <span>
                             <a class="user_list_control buttom-control-812" data-nonce="8f6901ec34" data-postid="812">Remove</a>
                            </span>
                    </div>
                </div>
                <div class="data">
                    <h3>
                        <a href="https://demo.ews.pe/dooplay/movies/avengers-endgame/">Avengers: Endgame</a>
                    </h3>
                    <span>2019</span>
                </div>
            </article>
        </div>
    </div>
    <div class="upge" id="views-user" >
        <h2>Marked as view</h2>
        <div id="items_views">
            <article class="simple movies" id="v18839">
                <div class="poster">
                    <img src="https://demo.ews.pe/dooplay/wp-content/uploads/2020/07/kjMbDciooTbJPofVXgAoFjfX8Of-185x278.jpg" alt="Greyhound">
                    <div class="profile_control">
                        <span>
                                <a href="https://demo.ews.pe/dooplay/movies/greyhound/">View</a>
                            </span>
                        <span>
                                 <a class="user_views_control buttom-control-v-18839" data-nonce="31bc738990" data-postid="18839">Remove</a>
                            </span>
                    </div>
                </div>
                <div class="data">
                    <h3>
                        <a href="https://demo.ews.pe/dooplay/movies/greyhound/">Greyhound</a>
                    </h3>
                    <span>2020</span>
                </div>
            </article>
        </div>
    </div>


    <div class="upge" id="settings" >
        <div class="user_edit_control">
            <ul class="idTabs">
                <li>
                    <a href="#general" class="selected">General</a>
                </li>
                <li>
                    <a href="#about" class="">About</a>
                </li>
                <li>
                    <a href="#password">Password</a>
                </li>
            </ul>
        </div>
    </div>
</div>
-->

<div id="tabs">
	<ul class="tabs-nav">
		<li><a href="#favorites">Избранные</a></li>
		<li><a href="#views-user">Просмотренные</a></li>
		<li><a href="#settings">Настройки</a></li>
	</ul>
	<div class="content">
		<div class="upge" id="favorites">
            <h2>Мои избранные фильмы</h2>
            <div id="items_movies">
                <article class="simple movies" id="p812">
                    <div class="poster">
                        <img src="https://demo.ews.pe/dooplay/wp-content/uploads/2020/05/or06FN3Dka5tukK1e9sl16pB3iy-185x278.jpg" alt="Avengers: Endgame">
                        <div class="profile_control animation-1">
                            <span>
                                <a href="https://demo.ews.pe/dooplay/movies/avengers-endgame/">View</a>
                            </span>
                            <span>
                                 <a class="user_list_control buttom-control-812" data-nonce="8f6901ec34" data-postid="812">Remove</a>
                                </span>
                        </div>
                    </div>
                    <div class="data">
                        <h3>
                            <a href="https://demo.ews.pe/dooplay/movies/avengers-endgame/">Avengers: Endgame</a>
                        </h3>
                        <span>2019</span>
                    </div>
                </article>
            </div>
		</div>
		<div class="upge" id="views-user">
            <h2>Помечены как просмотренные</h2>
            <div id="items_views">
                <article class="simple movies" id="v18839">
                    <div class="poster">
                        <img src="https://demo.ews.pe/dooplay/wp-content/uploads/2020/07/kjMbDciooTbJPofVXgAoFjfX8Of-185x278.jpg" alt="Greyhound">
                        <div class="profile_control">
                            <span>
                                    <a href="https://demo.ews.pe/dooplay/movies/greyhound/">View</a>
                                </span>
                            <span>
                                     <a class="user_views_control buttom-control-v-18839" data-nonce="31bc738990" data-postid="18839">Remove</a>
                                </span>
                        </div>
                    </div>
                    <div class="data">
                        <h3>
                            <a href="https://demo.ews.pe/dooplay/movies/greyhound/">Greyhound</a>
                        </h3>
                        <span>2020</span>
                    </div>
                </article>
            </div>
		</div>
		<div class="upge" id="settings">
            <div class="user_edit_control">
                <ul class="idTabs">
                    <li>
                        <a href="#general" class="selected">General</a>
                    </li>
                    <li>
                        <a href="#about" class="">About</a>
                    </li>
                    <li>
                        <a href="#password">Password</a>
                    </li>
                </ul>
                <form id="update_user_page" class="update_profile">
                    <div id="general" style="display: none;">
                        <fieldset class="form-email">
                            <label for="email">E-mail</label>
                            <input type="text" id="email" name="email" value="sckat@yandex.ru" disabled="">
                        </fieldset>
                        <fieldset class="from-first-name min fix">
                            <label for="first-name">First name</label>
                            <input type="text" id="first-name" name="first-name" value="Test">
                        </fieldset>
                        <fieldset class="form-last-name min">
                            <label for="last-name">Last name</label>
                            <input type="text" id="last-name" name="last-name" value="Test">
                        </fieldset>
                        <fieldset class="form-display_name">
                            <label for="display_name">Display name publicly as</label>
                            <select name="display_name" id="display_name">
                                <option value="Test">Test</option>
                                <option value="test">test</option>
                                <option value="Test">Test</option>
                                <option selected="selected" value="Test Test">Test Test</option>
                                <option selected="selected" value="Test Test">Test Test</option>
                            </select>
                        </fieldset>
                        <fieldset class="form-url">
                            <label for="url">Website</label>
                            <input type="text" id="url" name="url" value="">
                        </fieldset>
                        <fieldset class="form-url-twitter">
                            <label for="facebook">Facebook url</label>
                            <input type="text" id="facebook" name="facebook" value="">
                        </fieldset>
                        <fieldset class="form-url-facebook">
                            <label for="twitter">Twitter url</label>
                            <input type="text" id="twitter" name="twitter" value="">
                        </fieldset>
                        <fieldset class="form-url-gplus">
                            <label for="gplus">Google+ url</label>
                             <input type="text" id="gplus" name="gplus" value="">
                            </fieldset>
                        </div>
                        <div id="about" style="display: none;">
                            <fieldset class="form-description">
                                <label for="description">Description</label>
                                <textarea id="description" name="description" rows="3" cols=""></textarea>
                            </fieldset>
                        </div>
                        <div id="password" style="display: block;">
                            <fieldset class="form-pass1 min fix">
                                <label for="pass1">New password *</label>
                                <input type="password" id="pass1" name="pass1">
                            </fieldset>
                            <fieldset class="form-pass2 min">
                                <label for="pass2">Repeat password *</label>
                                <input type="password" id="pass2" name="pass2">
                            </fieldset>
                        </div>
                        <fieldset class="form-submit">
                            <input name="updateuser" type="submit" id="updateuser" class="submit button" value="Update account">
                            <input type="hidden" id="update-user-nonce" name="update-user-nonce" value="7232f7be99">
                            <input type="hidden" name="_wp_http_referer" value="/dooplay/account/">
                        </fieldset>
                </form>
            </div>
		</div>
	</div>
</div>
