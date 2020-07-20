//home component
import admin_home from './components/admin/homeComponent.vue';
//category component
import category_list from './components/admin/category/List.vue';
import category_new from './components/admin/category/New.vue';
import category_edit from './components/admin/category/Edit.vue';

//post component
import post_list from './components/admin/post/List.vue';
import post_new from './components/admin/post/New.vue';
import post_edit from './components/admin/post/Edit.vue';
export const routes = [
    {
        path:'/',
        component:admin_home
    },
     {
         path: '/category-list',
         component: category_list
     },
    {
        path:'/category-new',
        component:category_new
    },
    {
        path:'/category-edit/:id',
        component:category_edit
    },
    {
        path: '/post-list',
        component: post_list
    },
    {
        path: '/post-new',
        component: post_new
    },
    {
        path: '/post-edit/:id',
        component: post_edit
    }
]
