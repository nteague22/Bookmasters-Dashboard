module.exports = function (grunt) {
   grunt.initConfig({
      concat: {
         BMApp: {
            src: [
               'ng/app.js',
               'ng/controllers.js',
               'ng/services.js',
               'ng/directives.js',
               'ng/wrappers.js',
               'ng/validators.js',
            ],
            dest: 'ng/build/appbuild.js',
         },
         NTF: {
            src: ['views/apps/TitleManagement/share/components.js',
               'views/apps/TitleManagement/new_title_factory.js',
               'views/apps/TitleManagement/modals/modals.js',
               'views/apps/TitleManagement/new_title_basic.js',
               'views/apps/TitleManagement/new_title_contributors.js',
               'views/apps/TitleManagement/new_title_formats.js',
               'views/apps/TitleManagement/new_title_demographics.js',
               'views/apps/TitleManagement/new_title_marketing.js',
               'views/apps/TitleManagement/new_title_covers.js',
               'views/apps/TitleManagement/new_title_form.js', ],
            dest: 'views/apps/TitleManagement/build/build.js',
         },
      },
      watch: {
         NTF: {
            files: [
               'views/apps/TitleManagement/*.js',
               'views/apps/TitleManagement/modals/*.js',
               'views/apps/TitleManagement/share/*.js'
            ],
            tasks: [
               'concat',
               'uglify'
            ],
         },
         BMApp: {
            files: [
               'ng/*.js'
            ],
            tasks: [
               'concat',
               'uglify'
            ],
         },
      },
      uglify: {
         NTF: {
            files: {
               'views/apps/TitleManagement/build/build.min.js': ['views/apps/TitleManagement/build/build.js']
            }
         },
         BMApp: {
            options:{
               mangle: false
            },
            files: {
               'ng/build/appbuild.min.js': ['ng/build/appbuild.js']
            }
         }
      }

   });
   grunt.loadNpmTasks('grunt-contrib-concat');
   grunt.loadNpmTasks('grunt-contrib-watch');
   grunt.loadNpmTasks('grunt-contrib-uglify');
   grunt.registerTask('default', ['concat', 'watch']);
}