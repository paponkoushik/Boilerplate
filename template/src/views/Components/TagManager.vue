<template>
    <div class="container-scroller">
        <!--Top Navbar-->
        <Navbar/>

        <!--Sidebar-->
        <Sidebar/>

        <div class="container-fluid page-body-wrapper">
            <div class="main-panel">
                <div class="content-wrapper">
                    <Breadcrumb/>

                    <div class="card card-with-shadow border-0">
                        <div class="card-body">
                            <div class="tag-manager">
                                <div class="d-flex flex-wrap tag-wrapper">
                                    <span class="badge badge-pill text-capitalize mr-1 mb-1 d-flex align-items-center justify-content-between"
                                          v-for="(tag, index) in selectedTags"
                                          :style="{'background-color': tag.colorCode}"
                                          :key="'selectedTagOut'+index">
                                        {{ tag.name }}
                                    </span>
                                    <div class="dropdown">
                                        <span class="badge badge-pill badge-light d-flex align-items-center justify-content-between cursor-pointer"
                                              data-toggle="dropdown">
                                            + add
                                        </span>
                                        <div class="dropdown-menu p-3">
                                            <div class="d-flex flex-wrap editable-wrapper custom-scrollbar">
                                                <span class="badge badge-pill badge-danger text-capitalize mr-2 mb-2 d-flex align-items-center justify-content-between position-relative"
                                                      v-for="(tag, index) in selectedTags"
                                                      :style="{'background-color': tag.colorCode}"
                                                      :key="'selectedTagIn'+index">
                                                    <div class="mr-4">{{ tag.name }}</div>
                                                    <span v-if="isTagEditable"
                                                          class="btn-remove-tag d-flex align-items-center justify-content-center"
                                                          @click.prevent="removeTag(index)">
                                                        <Icon stroke-width="1" name="x" width="12" height="12"/>
                                                    </span>
                                                </span>
                                            </div>
                                            <div v-if="isTagEditable" class="tag-search-area">
                                                <div class="form-group form-group-with-search d-flex align-items-center mt-primary">
                                                    <span class="form-control-feedback">
                                                        <Icon name="search"/>
                                                    </span>
                                                    <input type="text"
                                                           class="form-control dropdown-toggle"
                                                           :class="{'change-style' : showSearchResult && searchQuery}"
                                                           placeholder="Type to create or search"
                                                           v-model="searchQuery"
                                                           @keyup.enter="addTag"
                                                           @focus="showSearchResult = true"/>
                                                </div>
                                                <div class="dropdown-menu custom-scrollbar show" v-if="showSearchResult && searchQuery">
                                                    <div class="p-3 text-muted" v-if="searchQuery && !tagSearchList.length">
                                                        No match found
                                                    </div>
                                                    <button class="dropdown-item" v-for="(item, index) in tagSearchList"
                                                            :key="index" @click="addTag(item)">
                                                        {{ item.name }}
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "TagManager",
        data() {
            return {
                selectedTags: [
                    {id: 3, name: 'Tag 3', colorCode: '#a8ddc2'},
                    {id: 4, name: 'Tag 4', colorCode: '#c09e20'},
                ],
                isTagEditable: true,
                tagList: [
                    {id: 1, name: 'Tag 1', colorCode: '#a240d3'},
                    {id: 2, name: 'Tag 2 Tag 2', colorCode: '#7b87e8'},
                    {id: 3, name: 'Tag 3', colorCode: '#a8ddc2'},
                    {id: 4, name: 'Tag 4', colorCode: '#c09e20'},
                    {id: 5, name: 'Tag 5', colorCode: '#eb3a4a'},
                    {id: 6, name: 'Tag 6', colorCode: '#4401b0'},
                    {id: 7, name: 'Tag 7', colorCode: '#773510'},
                    {id: 8, name: 'Tag 8', colorCode: '#0c4744'},
                    {id: 9, name: 'Tag 9', colorCode: '#b699c2'},
                    {id: 10, name: 'Tag 10', colorCode: '#f261ba'},
                ],
                searchQuery: null,
                showSearchResult: false,
            }
        },
        mounted() {

        },
        computed: {
            tagSearchList() {
                return this.tagList.filter((tag) => {
                    return tag.name.toLowerCase().includes(this.searchQuery.toLowerCase());
                });
            }
        },
        methods: {
            getRandomColor() {
                let letters = '0123456789ABCDEF',
                    color = '#',
                    i;
                for (i = 0; i < 6; i++) {
                    color += letters[Math.floor(Math.random() * 16)];
                }
                return color;
            },
            addTag(item) {
                if (this.searchQuery && !this.tagSearchList.length) {
                    this.selectedTags.push(
                        {
                            id: this.tagList.length++,
                            name: this.searchQuery,
                            colorCode: this.getRandomColor(),
                        }
                    );
                    this.showSearchResult = false;
                    this.searchQuery = null;
                } else {
                    this.selectedTags.push(item);
                    this.showSearchResult = false;
                    this.searchQuery = null;
                }
            },
            removeTag(index) {
                this.selectedTags.splice(index, 1);
            }
        }
    }
</script>