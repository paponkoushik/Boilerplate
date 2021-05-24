<template>
    <div class="content-wrapper">
        <div class="d-flex justify-content-between">
            <app-breadcrumb :page-title="$t('kanban_view')"/>
        </div>
        <div class="card card-with-shadow border-0">
            <div class="card-body position-relative" style="padding: 1rem; min-height: 400px;"
                 :class="{'loading-opacity':kanbanViewLoader}">
                <app-overlay-loader v-if="kanbanViewLoader"/>
                <div v-else class="kanban-wrapper custom-scrollbar overflow-auto"
                     style="min-height: 400px"
                     :class="{'justify-content-center align-items-center': !kanbanViewData.length}">
                    <template v-if="kanbanViewData.length">
                        <div v-for="(stage, index) in kanbanViewData" :key="'kanban-view-'+index" class="kanban-column">
                            <div class="p-3 mb-2 stage-header">
                                <h6>{{ stage.name }}</h6>
                                <div class="text-muted d-flex flex-wrap align-items-center stage-information">
                                    <span>{{ stage['tasks'].length + ' ' + $t('tasks') }} </span>
                                </div>
                            </div>
                            <draggable class="kanban-draggable-column"
                                       :list="stage['tasks']"
                                       @change="changedPosition($event, stage.id)"
                                       group="deals">
                                <div class="card card-with-shadow mb-2 border-0 draggable-item"
                                     v-for="(element, index) in stage['tasks']"
                                     :key="index">
                                    <div class="card-body font-size-90">
                                        <div class="row">
                                            <div class="col-10">
                                                <div class="media d-flex align-items-start mb-primary">
                                                    <app-avatar :title="element.title"
                                                                class="mr-2"
                                                                avatar-class="avatars-w-20"
                                                                :img="element.img?element.img:''"
                                                                :alt-text="$t('not_found')"/>
                                                    <div class="media-body d-flex justify-content-start">
                                                        {{ element.title }}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <div class="dropdown options-dropdown d-inline-block">
                                                    <button type="button" class="btn-option btn" data-toggle="dropdown"
                                                            :title="$t('actions')">
                                                        <app-icon name="more-vertical"/>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right py-2 mt-1">
                                                        <a class="dropdown-item px-4 py-2"
                                                           @click="editItem(element.id)"
                                                           href="#">
                                                            {{ $t('edit') }}
                                                        </a>
                                                        <a class="dropdown-item px-4 py-2"
                                                           @click="deleteItem(element.id)"
                                                           href="#">
                                                            {{ $t('delete') }}
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-muted d-flex align-items-center justify-content-between">
                                            <div class="media d-flex align-items-center">
                                                <app-avatar class="mr-2"
                                                            avatar-class="avatars-w-20"
                                                            :img="getAppUrl('images/avatar-demo.jpg')"
                                                            :alt-text="$t('not_found')"/>
                                                <div class="media-body">
                                                    {{ element.owner_name }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </draggable>
                            <div class="draggable-action-wrapper">
                                <button class="btn btn-stage-action shadow"
                                        slot="footer"
                                        data-toggle="modal"
                                        @click="openAddModal(stage.id)">
                                    <app-icon name="plus" class="mr-1"/>
                                    {{ $t('add') }}
                                </button>
                            </div>
                        </div>
                    </template>
                    <template v-else>
                        <app-empty-data-block :message="$t('nothing_to_show_here')"></app-empty-data-block>
                    </template>

                </div>
            </div>
        </div>

        <!--Add Edit Modal-->
        <task-add-edit-modal v-if="isTaskModalActive"
                             modal-id="kanban-view-add-edit-modal"
                             :stage-id="selectedStageId"
                             :selected-url="selectedUrl"
                             @afterSubmitDone="reloadAllState"
                             @close-modal="isTaskModalActive=false"/>
        <!--Delete Modal-->
        <app-delete-modal v-if="deleteConfirmationModalActive"
                                :preloader="deleteLoader"
                                modal-id="task-delete"
                                @confirmed="confirmed"
                                @cancelled="canceled"/>
    </div>
</template>

<script>
import draggable from 'vuedraggable';
import CoreLibrary from "../../../../../../core/helpers/CoreLibrary";
import {TASKS, STAGES} from "../../../../../Config/ApiUrl";

export default {
    name: "KanbanView",
    components: {draggable},
    extends: CoreLibrary,
    data() {
        return {
            kanbanViewLoader: false,
            deleteLoader: false,
            isTaskModalActive: false,
            deleteConfirmationModalActive: false,
            kanbanViewData: [],
            selectedUrl: null,
            selectedStageId: null,
            deletedTaskId: null,
        };
    },
    created() {
        this.reloadKanbanView();
    },
    methods: {
        reloadKanbanView() {
            this.kanbanViewLoader = true;
            this.axiosGet(STAGES).then(res => {
                this.kanbanViewData = res.data;
            }).finally(() => this.kanbanViewLoader = false);
        },
        openAddModal(stageId) {
            this.selectedUrl = '';
            this.selectedStageId = stageId;
            this.isTaskModalActive = true;
        },
        reloadAllState() {
            this.selectedUrl = '';
            this.selectedStageId = null;
            this.isTaskModalActive = false;
            this.reloadKanbanView();
        },
        changedPosition(event, id) {
            if (!this.isUndefined(event['added'])) {
                let taskId = event['added'].element.id;
                this.axiosPatch({
                    url: `${TASKS}/${taskId}`,
                    data: {'stage_id': id}
                })
            }
        },
        editItem(taskId) {
            this.selectedUrl = `${TASKS}/${taskId}`;
            this.isTaskModalActive = true;
        },
        deleteItem(taskId) {
            this.deletedTaskId = taskId;
            this.deleteConfirmationModalActive = true
        },
        confirmed() {
            this.deleteLoader = true;
            let deleteUrl = `${TASKS}/${this.deletedTaskId}`;
            this.axiosDelete(deleteUrl)
                .then((res) => {
                    this.hideDeleteModal();
                    this.$toastr.s(res.data.message);
                    this.reloadKanbanView();
                })
                .catch(err => {
                    this.hideDeleteModal();
                    this.$toastr.e(err.data.message);
                })
        },
        hideDeleteModal() {
            this.deleteLoader = false;
            $("#task-delete").modal('hide');
            this.canceled();
        },
        canceled() {
            this.deletedTaskId = null;
            this.deleteConfirmationModalActive = false;
        }
    }
}
</script>
