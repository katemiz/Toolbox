<div class="column box">


    <script src="{{ asset('/js/attachment.js') }}"></script>


        <div class="column">

            @if ($attachments->count() > 0)
            <p class="subtitle">Attachments</p>

            <table class="table is-fullwidth is-size-7">

                @foreach ($attachments as $key => $attachment)
                <tr class="my-0">
                    <td class="is-narrow">{{ ++$key }}</td>
                    <td>
                        <a href="/attach-view/{{ $attachment->id }}">dslfjdsjfd {{ $attachment->original_file_name }}</a>
                    </td>
                    <td class="is-narrow">sdsfdsf{{ $attachment->file_size }}</td>
                    <td class="is-narrow has-text-right">
                        <a href="javascript:deleteAttachConfirm('{{$model}}','{{$modelId}}','{{$attachment->id}}')">
                            <span class="icon is-small has-text-danger"><x-carbon-trash-can /></span>
                        </a>
                    </td>
                </tr>
                @endforeach

            </table>
            @endif

        </div>

        <div class="column">

            {{-- @role(config('requirements.roles.w')) --}}

            <form action="/upload-attach/{{$model}}/{{$modelId}}" method="POST" enctype="multipart/form-data">
                @csrf

                <input type="hidden" id="filesToUpload" name="filesToUpload" value="0" autocomplete="off">
                {{-- <input type="hidden" id="route_redirect" name="route_redirect" value="{{$redirect}}" autocomplete="off"> --}}

                <div class="columns">

                    <div class="column is-narrow">
                        <label class="file-label" id="fileLabelEl">
                            <input
                                class="file-input"
                                type="file"
                                name="dosyalar[]"
                                id="fupload"
                                multiple
                                onchange="getNames()" />
                            <span class="file-cta">
                                <span class="file-icon"><x-carbon-document-multiple-02 /></span>
                                <span class="file-label has-text-centered">Add Files</span>
                            </span>
                        </label>
                    </div>

                    <div class="column">
                        <p class="notification is-size-7 has-text-gray p-1" id="list_header">No files to upload!</p>
                        <div id="files_div" class="py-0"></div>

                        {{-- <button class="button is-link is-light is-hidden" id="uploadButton">
                            <span class="icon"><x-carbon-upload /></span>
                            <span>Upload</span>
                        </button> --}}
                    </div>



                </div>

                <div class="column has-text-right">


                    <button class="button is-link is-light is-hidden" id="uploadButton">
                        <span class="icon"><x-carbon-upload /></span>
                        <span>Upload</span>
                    </button>
                </div>

                @error('dosyalar') <span class="error">{{ $message }}</span> @enderror

            </form>

            {{-- @endrole --}}

        </div>

</div>

