const feather = require('feather-icons');

export default {
    data() {
        return {
            darkMode: false,
        }
    },
    watch: {
        darkMode: function () {
            // add/remove class to/from html tag
            let htmlElement = document.documentElement;

            if (this.darkMode) {
                localStorage.setItem("theme", 'dark');
                htmlElement.setAttribute('theme', 'dark');
            } else {
                localStorage.setItem("theme", 'light');
                htmlElement.setAttribute('theme', 'light');
            }
        }
    },
    mounted() {
        this.$nextTick(function () {
            let body = $('body');
            let sidebar = $('.sidebar');

            // Initialized Feather Icon
            feather.replace();

            // Initialized Bootstrap Tooltip
            $(document).ready(function () {
                $('[data-toggle="tooltip"]').tooltip();
            });

            $(function () {
                // Add active class to nav-link based on url dynamically
                function addActiveClass(element) {
                    if (current === "") {
                        // For root url
                        if (element.attr('href').indexOf("Index.vue.html") !== -1) {
                            element.parents('.nav-item').last().addClass('active');
                            if (element.parents('.sub-menu').length) {
                                element.closest('.collapse').addClass('show');
                                element.addClass('active');
                            }
                        }
                    } else {
                        // For others url
                        if (element.attr('href').indexOf(current) !== -1) {
                            element.parents('.nav-item').last().addClass('active');
                            if (element.parents('.sub-menu').length) {
                                element.closest('.collapse').addClass('show');
                                element.addClass('active');
                            }
                            if (element.parents('.submenu-item').length) {
                                element.addClass('active');
                            }
                        }
                    }
                }

                let current = location.pathname;
                $('.nav li a', sidebar).each(function () {
                    let $this = $(this);
                    addActiveClass($this);
                });

                // Close other submenu in sidebar on opening any
                sidebar.on('show.bs.collapse', '.collapse', function () {
                    sidebar.find('.collapse.show').collapse('hide');
                });
            });

            // Sidebar collapse menu on hover
            $(document).on('mouseenter mouseleave', '.sidebar .nav-item', function (ev) {
                let body = $('body');
                let sidebarIconOnly = body.hasClass("sidebar-icon-only");
                if (!('ontouchstart' in document.documentElement)) {
                    if (sidebarIconOnly) {
                        let $menuItem = $(this);
                        if (ev.type === 'mouseenter') {
                            $menuItem.addClass('hover-open')
                        } else {
                            $menuItem.removeClass('hover-open')
                        }
                    }
                }
            });

            // Close collapse menu when mouse leave from sidebar hover only
            $(document).on('mouseleave', '.sidebar-hover-only .sidebar', function (ev) {
                $('.sidebar').find('.collapse.show').collapse('hide');
            });

            // Prevent dropdown menu from closing inside click
            $(document).on('click.bs.dropdown.data-api', '.dropdown.keep-inside-clicks-open', function (e) {
                e.stopPropagation();
            });

            // jQuery to control form wizard steps z-index
            /*let totalSteps, stepLength, i, j = 100;
            totalSteps = $('.wizard-steps .nav-item');
            stepLength = totalSteps.length;
            for (i = 1; i <= stepLength; i++) {
                $(totalSteps[i]).css('z-index', j--);
            }*/
        });

        // Check for active theme
        let htmlElement = document.documentElement;
        let theme = localStorage.getItem("theme");

        if (theme === 'dark') {
            htmlElement.setAttribute('theme', 'dark');
            this.darkMode = true;
        } else {
            htmlElement.setAttribute('theme', 'light');
            this.darkMode = false;
        }
    },
    methods: {
        sidebarOffcanvas() {
            $('.sidebar-offcanvas').toggleClass('active')
        },
        fullscreen() {
            if ((document.fullScreenElement !== undefined && document.fullScreenElement === null) || (document.msFullscreenElement !== undefined && document.msFullscreenElement === null) || (document.mozFullScreen !== undefined && !document.mozFullScreen) || (document.webkitIsFullScreen !== undefined && !document.webkitIsFullScreen)) {
                if (document.documentElement.requestFullScreen) {
                    document.documentElement.requestFullScreen();
                } else if (document.documentElement.mozRequestFullScreen) {
                    document.documentElement.mozRequestFullScreen();
                } else if (document.documentElement.webkitRequestFullScreen) {
                    document.documentElement.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT);
                } else if (document.documentElement.msRequestFullscreen) {
                    document.documentElement.msRequestFullscreen();
                }
            } else {
                if (document.cancelFullScreen) {
                    document.cancelFullScreen();
                } else if (document.mozCancelFullScreen) {
                    document.mozCancelFullScreen();
                } else if (document.webkitCancelFullScreen) {
                    document.webkitCancelFullScreen();
                } else if (document.msExitFullscreen) {
                    document.msExitFullscreen();
                }
            }
        },
        togglingLeftMenu(action) {
            let body = $('body');

            if (action === 'active-icon-only-menu') {
                body.removeClass('sidebar-hover-only');
                body.toggleClass('sidebar-icon-only');
                this.leftMenuType = 'icon-only';
            }
            else if (action === 'active-floating-menu') {
                body.removeClass('sidebar-icon-only');
                body.toggleClass('sidebar-hover-only');
                $('.sidebar').find('.collapse.show').collapse('hide');
                this.leftMenuType = 'floating';
            }
            else if (action === 'active-normal-menu') {
                body.removeClass('sidebar-icon-only');
                body.removeClass('sidebar-hover-only');
                this.leftMenuType = 'normal';
            }
        },
        toggleDarkMode() {
            this.darkMode = !this.darkMode;
        },
        textTruncate(str, length, ending) {
            if (length == null) {
                length = 50;
            }
            if (ending == null) {
                ending = '...';
            }
            if (str.length > length) {
                return str.substring(0, length - ending.length) + ending;
            } else {
                return str;
            }
        },

        // Methods for filters
        clear(e) {
            e.stopPropagation();
        },
        hideDropDownMenu() {
            this.toggleFilters();
            this.isFiltersOpen = !this.isFiltersOpen;
            $('.dropdown-menu').removeClass('show');
        },
        toggleFilters() {
            this.isFiltersOpen = !this.isFiltersOpen;
        },
    }
};
