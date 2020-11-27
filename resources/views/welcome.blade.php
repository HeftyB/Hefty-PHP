@extends("layouts.layout")

@section("content")
<div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
    <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
        <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">
            HeftyB <br class="hidden lg:inline-block" />Web Developer
        </h1>
        <p class="mb-8 leading-relaxed">
            Welcome, I am Andrew Shields, a Web Devloper / Software Engineer and
            this is my personal piece of the World Wide Web. I have been fixing
            electronics and bulding computers for over 15 years and I am blah blah
            blah here is a whole paragraph of me typing some shiznit out yo. Lorem
            ipsum, dolor sit amet consectetur adipisicing elit. Architecto sit
            nemo unde facere accusamus ex quaerat, error placeat eum iste minus,
            nesciunt, dolor commodi aperiam! Voluptatum, iure dolorem. Vitae
            libero, expedita ea deserunt natus quia tempora. Numquam aliquid
            officiis temporibus nihil, sin
        </p>
        <div class="flex justify-center">
            <button class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">
                Button
            </button>
            <button class="ml-4 inline-flex text-gray-700 bg-gray-200 border-0 py-2 px-6 focus:outline-none hover:bg-gray-300 rounded text-lg">
                Button
            </button>
        </div>
    </div>
    <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
        <img class="object-cover object-center rounded-3xl" alt="hero" src="https://avatars2.githubusercontent.com/u/35949416?s=460&u=dfa1f58c9cc58038e01ae0401ef14f1c28bbb442&v=4" />
    </div>
</div>

<hr>

<div class="mid">
    <!-- <div class="">
        <h3 class="text-center dev-title">Development Technologies:</h3>
      </div>
      <div class="tech-stack col">
        <table>
          <tbody>
            <tr valign="top">
              <td width="10%" align="center">
                <span><strong>HTML5</strong></span
                ><br /><br />
                <img
                  height="64px"
                  src="https://cdn.svgporn.com/logos/html-5.svg"
                />
              </td>
              <td width="10%" align="center">
                <span><strong>CSS3</strong></span
                ><br /><br />
                <img
                  height="64px"
                  src="https://cdn.svgporn.com/logos/css-3.svg"
                />
              </td>
              <td width="10%" align="center">
                <span><strong>JavaScript</strong></span
                ><br /><br />
                <img
                  height="64px"
                  src="https://cdn.svgporn.com/logos/javascript.svg"
                />
              </td>
              <td width="10%" align="center">
                <span><strong>React</strong></span
                ><br /><br />
                <img
                  height="64px"
                  src="https://cdn4.iconfinder.com/data/icons/logos-3/600/React.js_logo-512.png"
                />
              </td>
              <td width="10%" align="center">
                <span><strong>Redux</strong></span
                ><br /><br />
                <img
                  height="64px"
                  src="https://cdn.svgporn.com/logos/redux.svg"
                />
              </td>

              <td width="10%" align="center">
                <span><strong>Java</strong></span
                ><br /><br />
                <img
                  height="64px"
                  src="https://www.vectorlogo.zone/logos/java/java-ar21.svg"
                />
              </td>
              <td width="10%" align="center">
                <span><strong>Spring Boot</strong></span
                ><br /><br />
                <img
                  height="64px"
                  src="https://cdn.svgporn.com/logos/spring.svg"
                />
              </td>
              <td width="10%" align="center">
                <span><strong>PostGreSQL</strong></span
                ><br /><br />
                <img
                  height="64px"
                  src="https://cdn.svgporn.com/logos/postgresql.svg"
                />
              </td>
              <td width="10%" align="center">
                <span><strong>Node</strong></span
                ><br /><br />
                <img
                  height="64px"
                  src="https://cdn.svgporn.com/logos/nodejs.svg"
                />
              </td>
            </tr>
            <tr valign="top">
              <td width="10%" align="center">
                <span><strong>MongoDB</strong></span
                ><br /><br />
                <img
                  height="20px"
                  src="https://cdn.svgporn.com/logos/mongodb.svg"
                />
              </td>
              <td width="10%" align="center">
                <span><strong>Python</strong></span
                ><br /><br />
                <img
                  height="64px"
                  src="https://cdn4.iconfinder.com/data/icons/logos-and-brands/512/267_Python_logo-128.png"
                />
              </td>
              <td width="10%" align="center">
                <span><strong>Flask</strong></span
                ><br /><br />
                <img
                  height="64px"
                  src="https://cdn.svgporn.com/logos/flask.svg"
                />
              </td>
              <td width="10%" align="center">
                <span><strong>Bootstrap</strong></span
                ><br /><br />
                <img
                  height="64px"
                  src="https://cdn.svgporn.com/logos/bootstrap.svg"
                />
              </td>
              <td width="10%" align="center">
                <span><strong>Docker</strong></span
                ><br /><br />
                <img
                  height="64px"
                  src="https://cdn.svgporn.com/logos/docker-icon.svg"
                />
              </td>
              <td width="10%" align="center">
                <span><strong>Linux</strong></span
                ><br /><br />
                <img
                  height="64px"
                  src="https://cdn.svgporn.com/logos/linux-tux.svg"
                />
              </td>
              <td width="10%" align="center">
                <span><strong>Apache</strong></span
                ><br /><br />
                <img
                  height="64px"
                  src="https://cdn.svgporn.com/logos/apache.svg"
                />
              </td>
              <td width="10%" align="center">
                <span><strong>MySQL</strong></span
                ><br /><br />
                <img
                  height="64px"
                  src="https://cdn.svgporn.com/logos/mysql.svg"
                />
              </td>
              <td width="10%" align="center">
                <span><strong>PHP</strong></span
                ><br /><br />
                <img
                  height="64px"
                  src="https://cdn.svgporn.com/logos/php.svg"
                />
              </td>
            </tr>
          </tbody>
        </table>
      </div> -->
    <!-- 
      <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
          <div
            class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8"
          >
            <div
              class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg"
            >
              <table class="min-w-full divide-y divide-gray-200">
                <thead>
                  <tr>
                    <th
                      scope="col"
                      class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                    >
                      Name
                    </th>
                    <th
                      scope="col"
                      class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                    >
                      Title
                    </th>
                    <th
                      scope="col"
                      class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                    >
                      Status
                    </th>
                    <th
                      scope="col"
                      class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"
                    >
                      Role
                    </th>
                    <th scope="col" class="px-6 py-3 bg-gray-50">
                      <span class="sr-only">Edit</span>
                    </th>
                  </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                  <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                      <div class="flex items-center">
                        <div class="flex-shrink-0 h-10 w-10">
                          <img
                            class="h-10 w-10 rounded-full"
                            src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=4&amp;w=256&amp;h=256&amp;q=60"
                            alt=""
                          />
                        </div>
                        <div class="ml-4">
                          <div class="text-sm font-medium text-gray-900">
                            Jane Cooper
                          </div>
                          <div class="text-sm text-gray-500">
                            jane.cooper@example.com
                          </div>
                        </div>
                      </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                      <div class="text-sm text-gray-900">
                        Regional Paradigm Technician
                      </div>
                      <div class="text-sm text-gray-500">Optimization</div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                      <span
                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800"
                      >
                        Active
                      </span>
                    </td>
                    <td
                      class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"
                    >
                      Admin
                    </td>
                    <td
                      class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium"
                    >
                      <a href="#" class="text-indigo-600 hover:text-indigo-900"
                        >Edit</a
                      >
                    </td>
                  </tr>

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div> -->

    <div class="container mx-auto px-4 py-5">
        <h1 class="text-4xl font-bold text-gray-800 mb-5 text-right">
            Development Technologies
        </h1>

        <!-- <div
          class="mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-10 gap-4"
        >
          <div class="rounded-3xl overflow-hidden shadow-lg">
            <img
              class="w-8"
              src="https://cdn.svgporn.com/logos/html-5.svg"
              alt="HTML5"
            />
            <div class="px-6 py-4">
              <div class="font-bold text-xl mb-2">HTML5</div>
            </div>
          </div> -->

        <div class="mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-5">
            <div class="rounded-3xl overflow-hidden shadow-lg flex justify-center items-center">
                <img class="w-3/12 justify-center" src="https://cdn.svgporn.com/logos/html-5.svg" alt="HTML5" />
                <div class="px-6 py-4">
                    <div class="font-extrabold text-2xl mb-2">HTML-5</div>
                </div>
            </div>

            <div class="rounded-3xl overflow-hidden shadow-lg flex justify-center items-center">
                <img class="w-3/12 justify-center" src="https://cdn.svgporn.com/logos/html-5.svg" alt="HTML5" />
                <div class="px-6 py-4">
                    <div class="font-extrabold text-2xl mb-2">HTML-5</div>
                </div>
            </div>

            <div class="rounded-3xl overflow-hidden shadow-lg flex justify-center items-center">
                <img class="w-3/12 justify-center" src="https://cdn.svgporn.com/logos/html-5.svg" alt="HTML5" />
                <div class="px-6 py-4">
                    <div class="font-extrabold text-2xl mb-2">HTML-5</div>
                </div>
            </div>

            <div class="rounded-3xl overflow-hidden shadow-lg flex justify-center items-center">
                <img class="w-3/12 justify-center" src="https://cdn.svgporn.com/logos/html-5.svg" alt="HTML5" />
                <div class="px-6 py-4">
                    <div class="font-extrabold text-2xl mb-2">HTML-5</div>
                </div>
            </div>

            <div class="rounded-3xl overflow-hidden shadow-lg flex justify-center items-center">
                <img class="w-3/12 justify-center" src="https://cdn.svgporn.com/logos/html-5.svg" alt="HTML5" />
                <div class="px-6 py-4">
                    <div class="font-extrabold text-2xl mb-2">HTML-5</div>
                </div>
            </div>

            <div class="rounded-3xl overflow-hidden shadow-lg flex justify-center items-center">
                <img class="w-3/12 justify-center" src="https://cdn.svgporn.com/logos/html-5.svg" alt="HTML5" />
                <div class="px-6 py-4">
                    <div class="font-extrabold text-2xl mb-2">HTML-5</div>
                </div>
            </div>

            <div class="rounded-3xl overflow-hidden shadow-lg flex justify-center items-center">
                <img class="w-3/12 justify-center" src="https://cdn.svgporn.com/logos/html-5.svg" alt="HTML5" />
                <div class="px-6 py-4">
                    <div class="font-extrabold text-2xl mb-2">HTML-5</div>
                </div>
            </div>

            <div class="rounded-3xl overflow-hidden shadow-lg flex justify-center items-center">
                <img class="w-3/12 justify-center" src="https://cdn.svgporn.com/logos/html-5.svg" alt="HTML5" />
                <div class="px-6 py-4">
                    <div class="font-extrabold text-2xl mb-2">HTML-5</div>
                </div>
            </div>

            <div class="rounded-3xl overflow-hidden shadow-lg flex justify-center items-center">
                <img class="w-3/12 justify-center" src="https://cdn.svgporn.com/logos/html-5.svg" alt="HTML5" />
                <div class="px-6 py-4">
                    <div class="font-extrabold text-2xl mb-2">HTML-5</div>
                </div>
            </div>

            <div class="rounded-3xl overflow-hidden shadow-lg flex justify-center items-center">
                <img class="w-3/12 justify-center" src="https://cdn.svgporn.com/logos/html-5.svg" alt="HTML5" />
                <div class="px-6 py-4">
                    <div class="font-extrabold text-2xl mb-2">HTML-5</div>
                </div>
            </div>

            <div class="rounded-3xl overflow-hidden shadow-lg flex justify-center items-center">
                <img class="w-3/12 justify-center" src="https://cdn.svgporn.com/logos/html-5.svg" alt="HTML5" />
                <div class="px-6 py-4">
                    <div class="font-extrabold text-2xl mb-2">HTML-5</div>
                </div>
            </div>

            <div class="rounded-3xl overflow-hidden shadow-lg flex justify-center items-center">
                <img class="w-3/12 justify-center" src="https://cdn.svgporn.com/logos/html-5.svg" alt="HTML5" />
                <div class="px-6 py-4">
                    <div class="font-extrabold text-2xl mb-2">HTML-5</div>
                </div>
            </div>

            <div class="rounded-3xl overflow-hidden shadow-lg flex justify-center items-center">
                <img class="w-3/12 justify-center" src="https://cdn.svgporn.com/logos/html-5.svg" alt="HTML5" />
                <div class="px-6 py-4">
                    <div class="font-extrabold text-2xl mb-2">HTML-5</div>
                </div>
            </div>

            <div class="rounded-3xl overflow-hidden shadow-lg flex justify-center items-center">
                <img class="w-3/12 justify-center" src="https://cdn.svgporn.com/logos/html-5.svg" alt="HTML5" />
                <div class="px-6 py-4">
                    <div class="font-extrabold text-2xl mb-2">HTML-5</div>
                </div>
            </div>

            <div class="rounded-3xl overflow-hidden shadow-lg flex justify-center items-center">
                <img class="w-3/12 justify-center" src="https://cdn.svgporn.com/logos/html-5.svg" alt="HTML5" />
                <div class="px-6 py-4">
                    <div class="font-extrabold text-2xl mb-2">HTML-5</div>
                </div>
            </div>

            <div class="rounded-3xl overflow-hidden shadow-lg flex justify-center items-center">
                <img class="w-3/12 justify-center" src="https://cdn.svgporn.com/logos/html-5.svg" alt="HTML5" />
                <div class="px-6 py-4">
                    <div class="font-extrabold text-2xl mb-2">HTML-5</div>
                </div>
            </div>

            <div class="rounded-3xl overflow-hidden shadow-lg flex justify-center items-center">
                <img class="w-3/12 justify-center" src="https://cdn.svgporn.com/logos/html-5.svg" alt="HTML5" />
                <div class="px-6 py-4">
                    <div class="font-extrabold text-2xl mb-2">HTML-5</div>
                </div>
            </div>

            <div class="rounded-3xl overflow-hidden shadow-lg flex justify-center items-center">
                <img class="w-3/12 justify-center" src="https://cdn.svgporn.com/logos/html-5.svg" alt="HTML5" />
                <div class="px-6 py-4">
                    <div class="font-extrabold text-2xl mb-2">HTML-5</div>
                </div>
            </div>

            <div class="rounded-3xl overflow-hidden shadow-lg flex justify-center items-center">
                <img class="w-3/12 justify-center" src="https://cdn.svgporn.com/logos/html-5.svg" alt="HTML5" />
                <div class="px-6 py-4">
                    <div class="font-extrabold text-2xl mb-2">HTML-5</div>
                </div>
            </div>

            <div class="rounded-3xl overflow-hidden shadow-lg flex justify-center items-center">
                <img class="w-3/12 justify-center" src="https://cdn.svgporn.com/logos/html-5.svg" alt="HTML5" />
                <div class="px-6 py-4">
                    <div class="font-extrabold text-2xl mb-2">HTML-5</div>
                </div>
            </div>
        </div>
    </div>
</div>

<hr />

<div class="projects">
    <div class="list-group">
        <a href="#" class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">Lamp Stack (this website)</h5>
                <small>always a work in progress</small>
            </div>
            <p class="mb-1">
                This website is a part of a LAMP stack (Linux, Apache, MySQL, PHP),
                with the Laravel framework. I origi
            </p>
            <small>Donec id elit non mi porta.</small>
        </a>
        <a href="#" class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">List group item heading</h5>
                <small class="text-muted">3 days ago</small>
            </div>
            <p class="mb-1">
                Donec id elit non mi porta gravida at eget metus. Maecenas sed diam
                eget risus varius blandit.
            </p>
            <small class="text-muted">Donec id elit non mi porta.</small>
        </a>
        <a href="#" class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">List group item heading</h5>
                <small class="text-muted">3 days ago</small>
            </div>
            <p class="mb-1">
                Donec id elit non mi porta gravida at eget metus. Maecenas sed diam
                eget risus varius blandit.
            </p>
            <small class="text-muted">Donec id elit non mi porta.</small>
        </a>
    </div>
</div>

@endsection