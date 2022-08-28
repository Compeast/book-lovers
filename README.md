## Laravel Test
![compeast](https://github.com/Compeast/book-lovers/raw/main/doc/compeast.png "Compeast")


Using Laravel / PHP for crete search page and product details page

- Search page using AutoComplete (Vanilla JS)
- Product details(book details) same as https://itbook.store/books/9781617291609
- 

### Stack
- [Laravel 9](https://laravel.com/docs/9.x/).
- [Using Bootstrap](https://getbootstrap.com/docs/5.2/getting-started/introduction/).
- [IT Bookstore API](https://api.itbook.store/). 
- [Database sqlite](https://laravel.com/docs/9.x/database#sqlite-configuration).

  
### Scope of work 

#### Search
- Search book like the attached image (Similar to google)
- AutoComplete search
- Search results like the attached image

#### Book details
- Similar Books in Book detail can be the new book ( https://api.itbook.store/#api-new)
- "look-inside" at the top of the book image if the book contains "PDF." ![search](https://github.com/Compeast/book-lovers/raw/main/doc/look-inside.png)
- When the user clicks on to "look inside icon," it pop-up a PDF to read it.
- When the user clicks to Author Search by author

#### other features
- When the user opens product details (book details), save the book details (all response data from Json) to DB (SQLite )
- Saving data using laravel event/listener
- If the book exists in DB, increment viewer number ( add new field viewer_number to the DB )
- Using Services and the best design pattern 
- you are free to use [Livewire](https://laravel-livewire.com/) or not.

### Install
- FORK to your account
- git clone ...
- composer install
- touch book_api.sqlite under database folder
- npm install
- npm run build

### Screenshots :
![search](https://github.com/Compeast/book-lovers/raw/main/doc/search.png)

![search books](https://github.com/Compeast/book-lovers/raw/main/doc/search-books.png)

![bookdetails](https://github.com/Compeast/book-lovers/raw/main/doc/bookdetails.png)

