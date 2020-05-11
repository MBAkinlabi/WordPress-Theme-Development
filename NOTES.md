# Part 6 - WordPress Theme Development - Include CSS in the Administration Panel
- If the CSS stylesheet is for the admin, the instructor likes to use `css/myfirst.admin.css` . You can also use `myfirst-admin.css` if you want. He just likes to use `.admin.css`
- `wp_register_style` for registering the style
- `wp_enqueue_style` for enqueueing or adding it.
- Wow, I learned that I can inspect the elements of the section of the admin to find the `id` it's using. I can style that `id` with CSS. Also, it's usually `id=wpcontent` or `id=wpbody`. I can style that.
- There's a problem, the style gets added throughout the pages of the admin. We don't want that. 
- To get the page we're pass in `$hook` into your `myfirst_load_admin_scripts` and echo it. Refresh the page and inspect. Immediately after `body` you should find something like `toplevel_page_my_first` in my case. 
- If you change page, you're going to have another variable there to reflect change of page. That's the hook you're echoing. Every page has it's own hook.
- He did an if statement check to see if we're not on that page which means execution of that script will stop. We return immediately. The below code which registers the style won't be triggered.
- Wow, we added styles and display the full name and description. 