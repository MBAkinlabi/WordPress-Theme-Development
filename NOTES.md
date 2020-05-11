# Part 3 - WordPress Theme Development - How to create Admin SubPages
- Inside the `add_menu_page`, the 4th arg should have `_` separating words instead of `-`
- Learned about `add_submenu_page` for adding submenu pages
- WordPress automatically repeats the parent in the first child in the menu. So, it's the same thing automatically.
- The slug of the parent and the first child should be the same so that clicking the parent opens the first submenu in the children. Calling the function.
- Instructor explains `require_once` - that means if it's already required before, it's only going to be required once. Not twice in the file.
- I learned how to display the `html` on the subpage. Wow, it's really cool. We created a separate page for html because it can be too complex to write full html in the function that returns the template. Because we may have to include JS and all that other stuff.
- Got data of the blog name using the function `<?php bloginfo('name'); ?>`
- Wow, we're displaying php already there.
- This is the way WordPress works. It can be weird but you have to get used to it to build WordPress websites.