function initializeVideoUploader(dropAreaId, galleryId) {
    let dropArea = document.getElementById(dropAreaId);
    let fileElem = document.createElement('input');
    let gallery = document.getElementById(galleryId);

    fileElem.type = 'file';
    fileElem.multiple = true;
    fileElem.accept = 'video/*';
    fileElem.classList.add('d-none');

    dropArea.appendChild(fileElem);

    ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
      dropArea.addEventListener(eventName, preventDefaults, false);
      document.body.addEventListener(eventName, preventDefaults, false);
    });

    ['dragenter', 'dragover'].forEach(eventName => {
      dropArea.addEventListener(eventName, highlight, false);
    });

    ['dragleave', 'drop'].forEach(eventName => {
      dropArea.addEventListener(eventName, unhighlight, false);
    });

    dropArea.addEventListener('drop', handleDrop, false);

    function preventDefaults(e) {
      e.preventDefault();
      e.stopPropagation();
    }

    function highlight(e) {
      dropArea.classList.add('highlight');
    }

    function unhighlight(e) {
      dropArea.classList.remove('highlight');
    }

    function handleDrop(e) {
      let dt = e.dataTransfer;
      let files = dt.files;
      handleFiles(files);
    }

    dropArea.addEventListener('click', () => {
      fileElem.click();
    });

    fileElem.addEventListener('change', function (e) {
      handleFiles(this.files);
    });

    function handleFiles(files) {
      files = [...files];
      files.forEach(previewVideo);
    }

    function previewVideo(file) {
      let reader = new FileReader();

      reader.onloadend = function () {
        let previewItem = document.createElement('div');
        previewItem.classList.add('preview-item');

        let video = document.createElement('video');
        video.src = reader.result;
        video.alt = file.name;
        video.controls = true;
        previewItem.appendChild(video);

        let deleteIcon = document.createElement('span');
        deleteIcon.classList.add('delete-icon');
        deleteIcon.innerHTML = '&times;';
        deleteIcon.addEventListener('click', () => {
          previewItem.remove();
        });

        previewItem.appendChild(deleteIcon);
        gallery.appendChild(previewItem);
      };

      if (file) {
        reader.readAsDataURL(file);
      }
    }
  }

  // Initialize the video uploader for each drop area
  initializeVideoUploader('vid-gallery1', 'vid-previewGallery1');
 