<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Platform</title>
    <link rel="stylesheet" href="/Medira/Media/css/discussion.css">
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
    <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <link rel="stylesheet" href="/Medira/Media/css/NavBar.css">
</head>

<body>
    <!-- Navigation Bar -->
    <div id="navbar">
     <?php include "NavBar.php"; ?>
    </div>

    <!-- Chat Area -->
    <div class="container">
        <div class="response-group">
            <div class="response">
                <div class="post-group">
                    <div class="post">
                        <div class="post__avatar"></div>
                        <h3 class="post__author">
                            Lester McTester
                        </h3>
                        <h4 class="post__timestamp">
                            Oct 13 at 8:51pm
                        </h4>
                        <p class="post__body">
                            Hamilton county river front museum center washington park breweries walnut hills findlay
                            market christian moerlein flying pig ohio valley jazz festival union terminal fifty west
                            coffee emporium chili.
                        </p>
                        <div class="post__actions">
                            <div class="button button--approve">
                                <i class="fa fa-thumbs-o-up"></i><i class="fa fa-thumbs-up solid"></i>
                            </div>
                            <div class="button button--deny">
                                <i class="fa fa-thumbs-o-down"></i><i class="fa fa-thumbs-down solid"></i>
                            </div>
                            <div class="button button--fill comment-trigger">
                                <span>Comment...</span>
                            </div>
                            <div class="button button--flag">
                                <i class="fa fa-comment-o"></i><i class="fa fa-comment solid"></i>2
                            </div>
                            <div class="post__comments">
                                <div class="comment-group">
                                    <div class="post">
                                        <div class="post__avatar comment__avatar"></div>
                                        <h3 class="post__author">
                                            Lester McTester
                                        </h3>
                                        <h4 class="post__timestamp">
                                            Oct 13 at 8:51pm
                                        </h4>
                                        <p class="post__body">
                                            Hamilton county river front museum center washington park breweries walnut
                                            hills findlay market christian moerlein flying pig ohio valley jazz festival
                                            union terminal fifty west coffee emporium chili.
                                        </p>
                                    </div>
                                    <div class="post">
                                        <div class="post__avatar comment__avatar"></div>
                                        <h3 class="post__author">
                                            Lester McTester
                                        </h3>
                                        <h4 class="post__timestamp">
                                            Oct 13 at 8:51pm
                                        </h4>
                                        <p class="post__body">
                                            Hamilton county river front museum center washington park breweries walnut
                                            hills findlay market christian moerlein flying pig ohio valley jazz festival
                                            union terminal fifty west coffee emporium chili.
                                        </p>
                                    </div>
                                </div>
                                <div class="comment-form">
                                    <div class="comment-form__avatar"></div>
                                    <textarea></textarea>
                                    <div class="comment-form__actions">
                                        <div class="button button--light cancel">
                                            Cancel
                                        </div>
                                        <div class="button button--confirm">
                                            Comment
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="post">
                        <div class="post__avatar"></div>
                        <h3 class="post__author">
                            Lester McTester
                        </h3>
                        <h4 class="post__timestamp">
                            Oct 13 at 8:51pm
                        </h4>
                        <p class="post__body">
                            Hamilton county river front museum center washington park breweries walnut hills findlay
                            market christian moerlein flying pig ohio valley jazz festival union terminal fifty west
                            coffee emporium chili.
                        </p>
                        <div class="post__actions">
                            <div class="button button--approve">
                                <i class="fa fa-thumbs-o-up"></i><i class="fa fa-thumbs-up solid"></i>
                            </div>
                            <div class="button button--deny">
                                <i class="fa fa-thumbs-o-down"></i><i class="fa fa-thumbs-down solid"></i>
                            </div>
                            <div class="button button--fill comment-trigger">
                                <span>Comment...</span>
                            </div>
                            <div class="button button--flag">
                                <i class="fa fa-comment-o"></i><i class="fa fa-comment solid"></i>2
                            </div>
                            <div class="post__comments">
                                <div class="comment-group">
                                    <div class="post">
                                        <div class="post__avatar comment__avatar"></div>
                                        <h3 class="post__author">
                                            Lester McTester
                                        </h3>
                                        <h4 class="post__timestamp">
                                            Oct 13 at 8:51pm
                                        </h4>
                                        <p class="post__body">
                                            Hamilton county river front museum center washington park breweries walnut
                                            hills findlay market christian moerlein flying pig ohio valley jazz festival
                                            union terminal fifty west coffee emporium chili.
                                        </p>
                                    </div>
                                    <div class="post">
                                        <div class="post__avatar comment__avatar"></div>
                                        <h3 class="post__author">
                                            Lester McTester
                                        </h3>
                                        <h4 class="post__timestamp">
                                            Oct 13 at 8:51pm
                                        </h4>
                                        <p class="post__body">
                                            Hamilton county river front museum center washington park breweries walnut
                                            hills findlay market christian moerlein flying pig ohio valley jazz festival
                                            union terminal fifty west coffee emporium chili.
                                        </p>
                                    </div>
                                </div>
                                <div class="comment-form">
                                    <div class="comment-form__avatar"></div>
                                    <textarea></textarea>
                                    <div class="comment-form__actions">
                                        <div class="button button--light cancel">
                                            Cancel
                                        </div>
                                        <div class="button button--confirm">
                                            Comment
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Message Input Section -->
            <div class="message-input">
                <textarea placeholder="Type your message here..."></textarea>
                <button class="disc-button">Send</button>
            </div>

        </div>

    </div>
    <footer>
        <p>&copy; 2024 Medical Forum</p>
    </footer>
</body>

</html>