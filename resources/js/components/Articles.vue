<template>
<div>
    <h2>Our Articles</h2>

            <form   @submit.prevent="addArticle" class="mb-3">
        <div class="form-group">
            <label for="exampleInputEmail1">Title</label>
            <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Enter Title" v-model="article.title">
            
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Body</label>
           <textarea class="form-control" placeholder="Article Body" v-model="article.body"></textarea> 
        </div>
        
        <button type="submit" class="btn btn-primary">Save</button>
        </form>
        <nav aria-label="Page navigation example">
        <ul class="pagination">
            <li v-bind:class="[{disabled: !pagination.prev_page_url}]" class="page-item"><a @click="fetchArticles(pagination.prev_page_url)" class="page-link" href="#">Previous</a></li>
            <li class="page-item disabled"><a class="page-link text-dark" href="#">Page {{pagination.current_page}} of {{pagination.last_page}}</a></li>
          
            <li  v-bind:class="[{disabled:!pagination.next_page_url}]" class="page-item"><a @click="fetchArticles(pagination.next_page_url)" class="page-link" href="#">Next</a></li>
        </ul>
        </nav>


    <div class="card card-body mb-2" v-for="article in articles" v-bind:key="article.id">
        <h3>{{article.title}}</h3>
        <p>{{article.body}}</p>
        <div class="form-group mb-2">
             <button class="btn btn-danger" @click="deleteArticle(article.id)">Delete</button>
              <button class="btn btn-warning float-right" @click="editArticle(article)" >Edit</button>

        </div>
         
       
    </div>
</div>
</template>

<script>
    export default {
        data() {
            return {
                articles: [],
                article: {
                    id: '',
                    title: '',
                    body: ''
                },
                article_id: '',
                pagination: '',
                edit: false

            }
        },

        created(){
        
            this.fetchArticles();
        },
        methods:{
        
            fetchArticles(page_url)
            {
                let vm= this;
                page_url= page_url || '/api/articles';
                fetch(page_url)
                .then(res=>res.json())
                .then(res=>{
                    this.articles=res.data;
                    vm.makePagination(res.meta,res.links);
                })
          

        },
          makePagination(meta,links)
            {
                let pagination = {
                    current_page: meta.current_page,
                    last_page: meta.last_page,
                    next_page_url: links.next,
                    prev_page_url: links.prev 

                }
                this.pagination= pagination;

            },
            deleteArticle(id)
            {
                if(confirm('Are you sure?'))
                {
                    fetch(`api/article/${id}`,{
                        method: 'delete'
                    })
                    .then(res => res.json())
                    .then(data=>{
                        alert('Article was removed');
                        fetchArticles();
                    })

                }
            },
            addArticle()
            { 
                   
                if(this.edit === false)
                {
                               
                  //new article  
                  fetch('/api/article',{
                      method: 'POST',
                      body: JSON.stringify(this.article),
                      headers:{
                          'Content-Type': 'application/json'
                      }
                  })
                  .then(res => res.json())
                  .then(data =>{
                      this.article.title= '';
                      this.article.body= '';
                      alert('Article was added');
                      fetchArticles();
                                           
                  })
                  .catch(err => console.log(err))
                }
                else{
                    //update article
                    fetch('/api/article',{
                      method: 'PUT',
                      body: JSON.stringify(this.article),
                      headers:{
                          'Content-Type': 'application/json'
                      }
                  })
                  .then(res => res.json())
                  .then(data =>{
                      this.article.title= '';
                      this.article.body= '';
                      alert('Article was updated');
                      fetchArticles();
                                           
                  })
                  .catch(err => console.log(err))
                }
            },
            editArticle(article)
            {
                this.edit= true;
                this.article.id=article.id;
                this.article.article_id=article.id;
                this.article.title=article.title;
                this.article.body=article.body;
                 
               
            }

    }}
</script>
