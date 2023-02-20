<style>
    html * {
        box-sizing: border-box;
    }

    p {
        margin: 0;
    }

    .upload {
    &__box {
         padding: 40px;
     }
    &__inputfile {
         width: .1px;
         height: .1px;
         opacity: 0;
         overflow: hidden;
         position: absolute;
         z-index: -1;
     }

    &__btn {
         display: inline-block;
         font-weight: 600;
         color: #fff;
         text-align: center;
         min-width: 116px;
         padding: 5px;
         transition: all .3s ease;
         cursor: pointer;
         border: 2px solid;
         background-color: #4045ba;
         border-color: #4045ba;
         border-radius: 10px;
         line-height: 26px;
         font-size: 14px;

    &:hover {
         background-color: unset;
         color: #4045ba;
         transition: all .3s ease;
     }

    &-box {
         margin-bottom: 10px;
     }
    }

    &__img {
    &-wrap {
         display: flex;
         flex-wrap: wrap;
         margin: 0 -10px;
     }

    &-box {
         width: 200px;
         padding: 0 10px;
         margin-bottom: 12px;
     }

    &-close {
         width: 24px;
         height: 24px;
         border-radius: 50%;
         background-color: rgba(0, 0, 0, 0.5);
         position: absolute;
         top: 10px;
         right: 10px;
         text-align: center;
         line-height: 24px;
         z-index: 1;
         cursor: pointer;

    &:after {
         content: '\2716';
         font-size: 14px;
         color: white;
     }
    }
    }
    }

    .img-bg {
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        position: relative;
        padding-bottom: 100%;
    }
</style>

<div class="tab-pane fade" id="account-info">
    <form action="{{route('image')}}" method="post" enctype="multipart/form-data">
        @csrf
    <div class="card-body pb-2">
        <div class="form-group">
            <label class="form-label">Bio</label>
            <textarea class="form-control" rows="5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nunc arcu, dignissim sit amet sollicitudin iaculis, vehicula id urna. Sed luctus urna nunc. Donec fermentum, magna sit amet rutrum pretium, turpis dolor molestie diam, ut lacinia diam risus eleifend sapien. Curabitur ac nibh nulla. Maecenas nec augue placerat, viverra tellus non, pulvinar risus.</textarea>
        </div>

        <div class="form-group">
            <label class="form-label">Birthday</label>
            <input type="text" class="form-control" value="May 3, 1995">
        </div>
        <div class="form-group">
            <label class="form-label">Country</label>
            <select class="custom-select">
                <option>USA</option>
                <option selected="">Canada</option>
                <option>UK</option>
                <option>Germany</option>
                <option>France</option>
            </select>
        </div>
    </div>
    <hr class="border-light m-0">
    <div class="card-body pb-2">
        <h6 class="mb-4">Contacts</h6>
        <div class="form-group">
            <label class="form-label">Phone</label>
            <input type="text" class="form-control" value="+0 (123) 456 7891">
        </div>
        <div class="form-group">
            <label class="form-label">Website</label>
            <input type="text" class="form-control" value="">
        </div>
        <div class="upload__box">
            <div class="upload__btn-box">
                <label class="upload__btn">
                    <p>Upload images</p>
                    <input type="file" multiple="" data-max_length="20" class="upload__inputfile" name="image[]">
                </label>
            </div>
            <div class="upload__img-wrap"></div>
        </div>
    </div>
    <div class="text-left mt-1">
        <button type="submit"   class="btn btn-primary">Save changes</button>&nbsp;
        <button type="button" class="btn btn-default">Cancel</button>
    </div>
    </form>
</div>

