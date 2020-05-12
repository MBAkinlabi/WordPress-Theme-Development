# Part 7 - WordPress Theme Development - Use the WordPress Media Uploader
- Link: https://www.youtube.com/watch?v=_uk_clTGWlE&list=PLriKzYyLb28kpEnFFi9_vJWPf5-_7d3rX&index=8
- `wp_register_script` for registering the script. jQuery here. But JavaScript script. jQuery is specified as a dependency in the array. You need to specify the dependencies. 
- Instructor always do the `view page source` thing after right clicking to see that the `js` and `css` files were included.
- `wp_enqueue_media` calls all the script and css files we need to use the media uploader. A wonderful and powerful built-in feature by WordPress.
- `preventDefault` - Instructors explains this. He said that he prevents whatever action that is bounded to the button from being triggered. I've noticed that it seems a lot of developers use this in JS. It's amazing seeing how many people who likes this function. It seems I'll be using it a lot too.
- `mediaUploader = wp.media.frames.file_frame = wp.media({` - Don't be scared by that code. You don't have to remember it. You can find it in the codex.
- It's just the different stages for accessing the media uploader in WordPress. 
- Multiple option there means the user can't select multiple files.
- `wp.media` helps us customize our options that appears. This is the place where WordPress takes you to when you want to upload a picture. That place where you're then asked to `Select Files`. Wow, this is really cool from WordPress.
- It gives me everything I need.
- So the title there in the `wp.media` is just the title for that place where you're then asked to select a picture. Really cool.
- If we want we can customize the options for the media uploader. There're more options you can customize here. 
- `mediaUploader.on('select',` is when the user selects a picture. We get the selection. get the first selection `first()` and convert it to `toJSON` to JSON.
- I really need to learn this jQuery thing to be really good for WordPress. 
- Keep in mind that `attachment` is now an array and it contains all the information that come from the picture. We want to return just the URL.
- Great thing to note is that the `mediaUploader.open()` was defined twice. The reason the instructor gave for this is that he doesn't want to define it immediately after that admin page is loaded.
- So before he wrote this, we've been clicking twice for it to open. Now we don't have to do that. It opens once.
- Here's his answer on the YouTube video: Here's the exchange between them:


Gil Katchko
3 years ago (edited)
Thanks again for your great tutorials i'm making a realy great progress thanks to you!
Promise that If i'll get rich by selling themes i'll buy you something from your amazon wish list XD

 If you dont mind i have a question about this tutorial, Why to define the media uploader on click event? i can define it on document ready and save the if statement and the duplicate of mediaUploader.open(), is there any reason you put it like this?

THANKS!
1
Alessandro Castellani
Alessandro Castellani
3 years ago
Hi, thank you so much for following and for your wonderful comment.


I decided to define the media uploader on click because I want to avoid to define it if the user doesn't use it.
If you hook the media uploader to a variable on document ready, you will always load the uploader every time the user access that page, even if he ends up not using it.


It's not a big deal, and if your method works and you don't experience any performance issue, you're good to go :D


Thanks for sharing your opinion and for the questions.
Happy Coding!

- Wow we automatically preview the picture and see how it looks like before actually saving it. and This is really cool. 