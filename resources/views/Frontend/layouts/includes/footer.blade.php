<footer style="width: 100%; height: 97vh">
    <div
        class="footer_top"
        style="
          display: flex;
          justify-content: center;
          padding-top: 90px;
          padding-bottom: 55px;
          width: 100%;
          height: 82vh;
          background-image: url('assets/images/background_process-1.jpg');
          background-repeat: no-repeat;
          background-position-x: 50%;
          background-position-y: 0;
          background-size: cover;
        "
    >
        <div
            class="width_full"
            style="
            width: 292.5px;
            height: 100%;
            padding: 0px 15px;
            margin-bottom: 22px;
          "
        >
            <h3
                style="
              font-size: 25px;
              font-weight: 700;
              margin-bottom: 30px;
              line-height: 27px;
              letter-spacing: 2px;
              text-transform: uppercase;
              color: #fff;
              font-family: Montserrat, sans-serif;
            "
            >
                Əlaqə məlumatları
            </h3>
            <div>
                <p
                    style="
                font-size: 14px;
                font-weight: 300;
                line-height: 23px;
                color: #868686;
                margin-top: 15px;
              "
                >
                    <i
                        class="fa fa-map-marker"
                        style="
                  font-size: 16px;
                  line-height: 16px;
                  display: inline-block;
                  margin-right: 20px;
                  font-weight: 900;
                "
                    ></i
                    >{{ siteSetting()->location }}
                </p>
                <p
                    style="
                font-size: 14px;
                font-weight: 300;
                line-height: 23px;
                color: #868686;
                margin-top: 15px;
              "
                >
                    <i
                        class="fa fa-phone"
                        style="
                  font-size: 16px;
                  line-height: 16px;
                  display: inline-block;
                  margin-right: 20px;
                  font-weight: 900;
                "
                    ></i
                    >{{ siteSetting()->phone }}
                </p>
                <p
                    style="
                font-size: 14px;
                font-weight: 300;
                line-height: 23px;
                color: #868686;
                margin-top: 15px;
              "
                >
                    <i
                        class="far fa-envelope"
                        style="
                  font-size: 16px;
                  line-height: 16px;
                  display: inline-block;
                  margin-right: 20px;
                  font-weight: 900;
                "
                    ></i
                    >{{ siteSetting()->email }}
                </p>
            </div>
        </div>
        <div
            class="width_full"
            style="
            width: 292.5px;
            height: 100%;
            padding: 0px 15px;
            margin-bottom: 22px;
          "
        >
            <h3
                style="
              font-size: 25px;
              font-weight: 700;
              margin-bottom: 30px;
              line-height: 27px;
              letter-spacing: 2px;
              text-transform: uppercase;
              color: #fff;
              font-family: Montserrat, sans-serif;
            "
            >
                Bizə yazın
            </h3>
            <form
                action=""
                method="post"
                novalidate="novalidate"
                data-status="init"
                style="width: 100%; height: 100%"
            >
                <input
                    style="
                outline: none;
                color: rgb(155, 155, 155);
                display: inline-block;
                font-size: 14px;
                font-weight: 300;
                margin-bottom: 13px;
                line-height: 45px;
                height: 45px;
                width: 100%;
                text-align: start;
                padding-bottom: 8px;
                background-color: transparent;
                border: none;
                border-bottom: 1px solid #a8a9a9;
              "
                    size="40"
                    maxlength="400"
                    aria-required="true"
                    aria-invalid="false"
                    placeholder="Ad və soyadınız"
                    value=""
                    type="text"
                    name=""
                />
                <p style="margin-bottom: 10px">
                    <input
                        style="
                  outline: none;
                  color: rgb(155, 155, 155);
                  display: inline-block;
                  font-size: 14px;
                  font-weight: 300;
                  margin-bottom: 13px;
                  line-height: 45px;
                  height: 45px;
                  width: 100%;
                  text-align: start;
                  padding-bottom: 8px;
                  background-color: transparent;
                  border: none;
                  border-bottom: 1px solid #a8a9a9;
                "
                        size="40"
                        maxlength="400"
                        aria-required="true"
                        aria-invalid="false"
                        placeholder="E-mail"
                        value=""
                        type="email"
                        name=""
                    />
                </p>
                <p style="margin-bottom: 10px">
              <span>
                <textarea
                    style="
                    outline: none;
                    color: rgb(155, 155, 155);
                    display: inline-block;
                    font-size: 14px;
                    font-weight: 300;
                    margin-bottom: 20px;
                    line-height: 25px;
                    height: 75px;
                    width: 100%;
                    letter-spacing: normal;
                    overflow-wrap: break-word;
                    text-align: start;
                    padding: 2px;
                    background-color: transparent;
                    border: none;
                    border-bottom: 1px solid #a8a9a9;
                  "
                    cols="40"
                    rows="10"
                    maxlength="2000"
                    aria-invalid="false"
                    placeholder="Mesaj"
                    name=""
                ></textarea>
              </span>
                </p>
                <p
                    style="
                color: rgb(155, 155, 155);
                font-size: 14px;
                font-weight: 300;
                letter-spacing: 1px;
                line-height: 25px;
                margin-bottom: 10px;
              "
                >
                    <input
                        type="submit"
                        value="Göndər"
                        style="
                  font-family: Montserrat, sans-serif;
                  background-color: transparent;
                  width: 80px;
                  text-transform: uppercase;
                  padding: 10px 22px 3px 0px;
                  margin-bottom: 13px;
                  line-height: 25px;
                  letter-spacing: 1px;
                  display: inline-block;
                  color: rgb(229, 174, 73);
                  border: none;
                  border-bottom: 1px solid rgb(229, 174, 73);
                  text-align: start;
                "
                    />
                </p>
            </form>
        </div>
        <div
            class="newsletter width_full"
            style="
            width: 293px;
            height: 100%;
            padding: 0 15px;
            margin-bottom: 22px;
          "
        >
            <h3
                style="
              font-size: 25px;
              font-weight: 700;
              margin-bottom: 30px;
              line-height: 27px;
              letter-spacing: 2px;
              text-transform: uppercase;
              color: #fff;
              font-family: Montserrat, sans-serif;
            "
            >
                Abunə ol
            </h3>
            <p
                style="
              margin-bottom: 30px;
              line-height: 25px;
              font-size: 14px;
              font-weight: 400;
              font-family: Montserrat, sans-serif;
              color: rgb(134, 134, 134);
            "
            >
                Abunə ol və ən son yeniliklər ilk sənə gəlsin...
            </p>
            <form
                method="post"
                action=""
                style="
              width: 100%;
              max-width: 500px;
              line-height: 23px;
              font-size: 14px;
              margin-bottom: 14px;
              margin-top: 36px;
              font-weight: 300;
              color: rgb(134, 134, 134);
            "
            >
                <div
                    style="
                margin-bottom: 10px;
                background-color: rgb(244, 244, 244);
                display: flex;
                justify-content: space-between;
              "
                >
                    <input
                        style="
                  cursor: text;
                  width: 100%;
                  color: rgb(134, 134, 134);
                  font-size: 14px;
                  font-family: Ubuntu, sans-serif;
                  height: 47px;
                  outline: none;
                  border: none;
                  background-color: rgb(244, 244, 244);
                  padding: 12px;
                "
                        type="email"
                        name=""
                        value=""
                        placeholder=""
                    />
                    <i
                        class="fa-solid fa-check"
                        style="
                  cursor: pointer;
                  width: 47px;
                  height: 47px;
                  color: #fff;
                  text-align: center;
                  padding: 10px 0;
                  line-height: 23px;
                  font-size: 16px;
                  background-color: rgb(229, 174, 73);
                "
                    ></i>
                </div>
            </form>
        </div>
    </div>

    <div
        class="footer_bottom"
        style="
          width: 100%;
          height: 15vh;
          background-color: #000;
          display: flex;
          justify-content: space-around;
          align-items: center;
        "
    >
        <p
            style="
            color: #9b9b9b;
            font-size: 14px;
            font-weight: 300;
            line-height: 25px;
            letter-spacing: 1px;
            font-family: Ubuntu, sans-serif;
          "
        >
            Copyright {{ date('Y') }} by ASMOB
        </p>
        <ul
            style="
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 10px;
          "
        >
            <li
                style="
              width: 32px;
              height: 32px;
              display: flex;
              justify-content: center;
              align-items: center;
              padding: 0px 8px;
            "
            >
                <a
                    target="_self"
                    href="https://burncode.org"
                    style="
                display: flex;
                justify-content: center;
                align-items: center;
                border-radius: 50%;
                color: rgb(51, 122, 183);
                font-size: 14px;
                font-weight: 300;
                width: 32px;
                height: 32px;
                text-align: center;
              "
                >
                    <i
                        class="fab fa-facebook-f"
                        style="
                  transition: all 0.3s ease-in-out;
                  width: 32px;
                  height: 32px;
                  padding: 7px 0px;
                  text-align: center;
                  font-size: 18px;
                  font-weight: 400;
                  border-radius: 50%;
                  display: inline-block;
                  background-color: rgb(60, 88, 153);
                  color: #fff;
                "
                    ></i>
                </a>
            </li>
            <li
                style="
              width: 32px;
              height: 32px;
              display: flex;
              justify-content: center;
              align-items: center;
              padding: 0px 8px;
            "
            >
                <a
                    target="_self"
                    href="https://burncode.org"
                    style="
                display: flex;
                justify-content: center;
                align-items: center;
                border-radius: 50%;
                color: rgb(51, 122, 183);
                font-size: 14px;
                font-weight: 300;
                width: 32px;
                height: 32px;
                text-align: center;
              "
                >
                    <i
                        class="fa-brands fa-x-twitter"
                        style="
                  transition: all 0.3s ease-in-out;
                  width: 32px;
                  height: 32px;
                  padding: 7px 0px;
                  text-align: center;
                  font-size: 18px;
                  font-weight: 400;
                  border-radius: 50%;
                  display: inline-block;
                  background-color: rgb(44, 170, 225);
                  color: #fff;
                "
                    ></i>
                </a>
            </li>
            <li
                style="
              width: 32px;
              height: 32px;
              display: flex;
              justify-content: center;
              align-items: center;
              padding: 0px 8px;
            "
            >
                <a
                    target="_self"
                    href="https://burncode.org"
                    style="
                display: flex;
                justify-content: center;
                align-items: center;
                border-radius: 50%;
                color: rgb(51, 122, 183);
                font-size: 14px;
                font-weight: 300;
                width: 32px;
                height: 32px;
                text-align: center;
              "
                >
                    <i
                        class="fab fa-youtube"
                        style="
                  transition: all 0.3s ease-in-out;
                  width: 32px;
                  height: 32px;
                  padding: 7px 0px;
                  text-align: center;
                  font-size: 18px;
                  font-weight: 400;
                  border-radius: 50%;
                  display: inline-block;
                  background-color: rgb(200, 48, 42);
                  color: #fff;
                "
                    ></i>
                </a>
            </li>
            <li
                style="
              width: 32px;
              height: 32px;
              display: flex;
              justify-content: center;
              align-items: center;
              padding: 0px 8px;
            "
            >
            </li>
        </ul>
    </div>
</footer>
