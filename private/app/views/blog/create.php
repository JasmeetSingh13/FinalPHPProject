
<h1>Create a Post </h1>
<form mehtod="post" action="/blog/create">
        <input type="hidden" value="csrf">
        <label for="title">Title</label>
        <input type="text" id = "title" name="title" >
         
          <label for="content">Content</label>
        <textarea name="content" id="content"></textarea>
        <input type = "submit">
</form>