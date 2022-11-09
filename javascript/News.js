class News
{
    constructor(id, title, body, author, date, tag)
    {
        this.id = id;
        this.title = title;
        this.body = body;
        this.author = author;
        this.date = date;
        this.tag = tag;
    }
    
    addNews()
    {
        console.log('Tambah Berita')
    }
    editNews()
    {
        console.log('Edit Berita')
    }
    deleteNews()
    {
        console.log('Hapus Berita')
    }
    updateNews()
    {
        console.log('Perbarui Berita')
    }
    searchNews()
    {
        console.log('Cari Berita')
    }
    showNews()
    {
        console.log('Menampilkan Berita')
    }
}