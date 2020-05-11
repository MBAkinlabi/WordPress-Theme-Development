# Part 5 - WordPress Theme Development - Custom Social Media Fields and Sanitize Callbacks
- You can duplicate the input. Just add space between them, but they'll be beside each other. 
- Wow, now I know what `add_settings_field` really does. It just one line of input. The one line could have two forms of course. Maybe multiple forms. I'm starting to understand this WordPress thing. 
- Talking about sanitization.
- We have to add like `$input` as an arg into the sanitization callback function. the name can be anything. It represents whatever the value that the user inputs into the field. 
- `sanitize_text_field` for sanitizing text. Always return inside it. Don't echo. Remember what's it's used for. Just sanitizing. Nothing else. It's a prebuilt function by WordPress. It can handle all the terrible typing that a user can input. Removes html and php
- `str_replace` to replace something. This is from PHP. 
- We included a paragraph description below the Twitter input area. Well it seem the CSS class `description` is made available by WordPress. I might come across it in the docs though.